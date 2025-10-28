<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateAdminCommand extends Command
{
    protected $signature = 'admin:update {email} {password}';
    protected $description = 'Update admin user email and password';

    public function handle()
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        $user = User::where('email', 'admin@example.com')->first();

        if (!$user) {
            $this->error('Admin user not found!');
            return 1;
        }

        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();

        $this->info("Admin user updated successfully!");
        $this->info("Email: {$email}");
        $this->info("Password: {$password}");

        return 0;
    }
}
