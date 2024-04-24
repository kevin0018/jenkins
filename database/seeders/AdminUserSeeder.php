<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'lastName' => 'admin',
            'email' => 'admin@jenkins.com',
            'password' => bcrypt('admin'),
            'is_admin' => true,
        ]);
    }
}