<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    protected $signature = 'admin:create';
    protected $description = 'Create or update admin user';

    public function handle()
    {
        $email = 'mdjulfikerhasan191212@gmail.com';
        $password = 'Hasan2233';

        $admin = User::where('email', $email)->first();

        if ($admin) {
            $admin->update([
                'name' => 'Admin',
                'password' => Hash::make($password),
                'is_admin' => true,
            ]);
            $this->info('Admin user updated successfully!');
        } else {
            User::create([
                'name' => 'Admin',
                'email' => $email,
                'password' => Hash::make($password),
                'is_admin' => true,
            ]);
            $this->info('Admin user created successfully!');
        }

        $this->info("Email: {$email}");
        $this->info("Password: {$password}");
        
        return 0;
    }
}
