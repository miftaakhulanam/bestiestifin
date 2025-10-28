<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Concept;

class CheckConceptsCommand extends Command
{
    protected $signature = 'concepts:check';
    protected $description = 'Check if concepts exist in database';

    public function handle()
    {
        $this->info('Checking concepts in database...');

        $count = Concept::count();
        $this->info("Total concepts: {$count}");

        if ($count === 0) {
            $this->error('No concepts found! Running seeder...');
            $this->call('db:seed', ['--class' => 'ConceptSeeder']);
            $this->info('Seeder completed.');
        }

        $concepts = Concept::all(['slug', 'title']);
        $this->info('Available concepts:');
        foreach ($concepts as $concept) {
            $this->line("- {$concept->slug}: {$concept->title}");
        }

        return 0;
    }
}
