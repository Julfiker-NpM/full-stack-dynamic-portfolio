<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Check if admin user already exists
        $admin = User::where('email', 'mdjulfikerhasan191212@gmail.com')->first();
        
        if (!$admin) {
            User::create([
                'name' => 'Admin',
                'email' => 'mdjulfikerhasan191212@gmail.com',
                'password' => Hash::make('Hasan2233'),
                'is_admin' => true,
            ]);
        } else {
            // Update existing admin credentials
            $admin->update([
                'password' => Hash::make('Hasan2233'),
                'is_admin' => true,
            ]);
        }

        // Seed initial data (projects, skills, experiences, settings)
        $this->call(InitialDataSeeder::class);
    }
}


