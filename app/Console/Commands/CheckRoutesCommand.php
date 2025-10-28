<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class CheckRoutesCommand extends Command
{
    protected $signature = 'routes:check-concepts';
    protected $description = 'Check if concept routes are properly registered';

    public function handle()
    {
        $this->info('Checking concept routes...');

        $conceptRoutes = [
            'konsep.index',
            'konsep.sensing',
            'konsep.thinking',
            'konsep.intuiting',
            'konsep.feeling',
            'konsep.instinct',
            'konsep.show'
        ];

        foreach ($conceptRoutes as $routeName) {
            try {
                $route = Route::getRoutes()->getByName($routeName);
                if ($route) {
                    $this->info("✓ {$routeName}: {$route->uri()}");
                } else {
                    $this->error("✗ {$routeName}: Not found");
                }
            } catch (\Exception $e) {
                $this->error("✗ {$routeName}: Error - {$e->getMessage()}");
            }
        }

        return 0;
    }
}
