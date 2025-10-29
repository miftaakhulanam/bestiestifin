<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class Fix403Command extends Command
{
    protected $signature = 'fix:403';
    protected $description = 'Fix 403 Forbidden error for Filament admin';

    public function handle()
    {
        $this->info('🔧 Fixing 403 Forbidden error...');

        // Fix file permissions
        $this->info('📁 Fixing file permissions...');
        $directories = [
            'storage',
            'storage/app',
            'storage/framework',
            'storage/framework/cache',
            'storage/framework/sessions',
            'storage/framework/views',
            'storage/logs',
            'bootstrap/cache'
        ];

        foreach ($directories as $dir) {
            $path = base_path($dir);
            if (File::exists($path)) {
                File::chmod($path, 0755);
                $this->info("✓ Fixed permissions for {$dir}");
            } else {
                File::makeDirectory($path, 0755, true);
                $this->info("✓ Created directory {$dir}");
            }
        }

        // Clear all caches
        $this->info('🧹 Clearing caches...');
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('view:clear');

        // Recreate .htaccess if needed
        $this->info('📄 Checking .htaccess...');
        $htaccessPath = public_path('.htaccess');
        if (!File::exists($htaccessPath)) {
            $htaccessContent = '<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Handle X-XSRF-Token Header
    RewriteCond %{HTTP:x-xsrf-token} .
    RewriteRule .* - [E=HTTP_X_XSRF_TOKEN:%{HTTP:X-XSRF-Token}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>';

            File::put($htaccessPath, $htaccessContent);
            $this->info('✓ Created .htaccess file');
        } else {
            $this->info('✓ .htaccess exists');
        }

        // Cache configurations
        $this->info('⚡ Caching configurations...');
        $this->call('config:cache');
        $this->call('route:cache');
        $this->call('view:cache');

        // Test admin user
        $this->info('👤 Checking admin user...');
        $admin = \App\Models\User::where('email', 'admin@bestiestifin.com')->first();
        if ($admin) {
            $this->info("✓ Admin user found: {$admin->name}");
        } else {
            $this->warn('⚠ Admin user not found, creating one...');
            $this->call('production:admin', [
                'email' => 'admin@bestiestifin.com',
                'password' => 'admin123'
            ]);
        }

        $this->info('🎉 403 Fix completed!');
        $this->info('🌐 Try accessing: ' . config('app.url') . '/admin');

        return 0;
    }
}

