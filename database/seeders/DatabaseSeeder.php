<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\admin;
use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

       admin::create([
        'name' => 'devripon',
        'email' => 'admin@devripon.com',
        'cell' => '01913509868',
        'password' => password_hash('devripon',PASSWORD_DEFAULT),
        'username' => 'devripon',
       ]);
    }
}