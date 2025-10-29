<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProductionAdminCommand extends Command
{
    protected $signature = 'production:admin {email} {password}';
    protected $description = 'Create/update admin user for production';

    public function handle()
    {
        // Check if we're in production
        if (app()->environment() !== 'production') {
            $this->warn('⚠️  This command is designed for production environment');
            $this->warn('Current environment: ' . app()->environment());

            if (!$this->confirm('Continue anyway?')) {
                $this->info('Command cancelled.');
                return 1;
            }
        }

        $email = $this->argument('email');
        $password = $this->argument('password');

        $this->info('Creating/updating admin user...');

        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Admin Bestie STIFIn',
                'email' => $email,
                'password' => Hash::make($password),
                'email_verified_at' => now(),
            ]
        );

        $this->info('✅ Admin user created/updated successfully!');
        $this->info("📧 Email: {$email}");
        $this->info("🔑 Password: {$password}");
        $this->info("🌐 Admin panel: " . config('app.url') . "/admin");

        // Log the action
        \Log::info('Admin user updated via production command', [
            'email' => $email,
            'user_id' => $user->id,
            'timestamp' => now()
        ]);

        return 0;
    }
}

