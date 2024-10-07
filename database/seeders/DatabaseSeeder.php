<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'ismi',
            'email'=>'ismi@gmail.com',
            'password'=> bcrypt('12345'),
            // 'is_admin'=>true
        ]);
        User::create([
            'name'=>'aeni',
            'email'=>'aeni@gmail.com',
            'password'=> bcrypt('12345'),
            // 'is_admin'=>false
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
