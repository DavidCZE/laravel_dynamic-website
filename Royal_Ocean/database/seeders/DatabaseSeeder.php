<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Produkty;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();
        $user = User::factory()->create([
            'name' => 'Chuck Norris',
            'email' => 'chuck@gmail.com'
        ]);

        \App\Models\Produkty::factory(6)->create();

        \App\Models\Bazar::factory(6)->create([
            'user_id' => $user->id
        ]);

        \App\Models\Blog::factory(8)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
