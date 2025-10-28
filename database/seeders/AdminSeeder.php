<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Update existing admin or create new one
        User::updateOrCreate(
            ['email' => 'admin@bestiestifin.com'], // Ganti dengan email yang diinginkan
            [
                'name' => 'Admin Bestie STIFIn',
                'email' => 'admin@bestiestifin.com',
                'password' => Hash::make('admin123'), // Ganti dengan password yang diinginkan
                'email_verified_at' => now(),
            ]
        );

        $this->command->info('Admin user created/updated successfully!');
        $this->command->info('Email: admin@bestiestifin.com');
        $this->command->info('Password: admin123');
    }
}
