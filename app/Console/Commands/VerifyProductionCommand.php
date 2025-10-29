<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Concept;

class VerifyProductionCommand extends Command
{
    protected $signature = 'production:verify';
    protected $description = 'Verify production deployment';

    public function handle()
    {
        $this->info('🔍 Verifying production deployment...');

        // Check admin user
        $this->info('👤 Checking admin user...');
        $admin = User::where('email', 'admin@bestiestifin.com')->first();
        if ($admin) {
            $this->info("✅ Admin user found: {$admin->name} ({$admin->email})");
        } else {
            $this->error('❌ Admin user not found!');
        }

        // Check concepts
        $this->info('📚 Checking concepts...');
        $conceptCount = Concept::count();
        if ($conceptCount >= 5) {
            $this->info("✅ Concepts found: {$conceptCount}");
            Concept::all(['slug', 'title'])->each(function ($concept) {
                $this->line("   - {$concept->slug}: {$concept->title}");
            });
        } else {
            $this->error("❌ Insufficient concepts: {$conceptCount}");
        }

        // Check routes
        $this->info('🛣️  Checking routes...');
        $routes = [
            'konsep.index',
            'konsep.thinking',
            'konsep.sensing',
            'konsep.intuiting',
            'konsep.feeling',
            'konsep.instinct'
        ];

        foreach ($routes as $routeName) {
            try {
                $route = \Route::getRoutes()->getByName($routeName);
                if ($route) {
                    $this->info("✅ {$routeName}: {$route->uri()}");
                } else {
                    $this->error("❌ {$routeName}: Not found");
                }
            } catch (\Exception $e) {
                $this->error("❌ {$routeName}: Error");
            }
        }

        $this->info('🎉 Production verification completed!');
        return 0;
    }
}

