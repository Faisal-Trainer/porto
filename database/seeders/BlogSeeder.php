<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = \App\Models\User::where('email', 'faisalyusra51@gmail.com')->first();
        
        if (!$user) {
            $user = \App\Models\User::factory()->create([
                'name' => 'Super Admin',
                'email' => 'faisalyusra51@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
            ]);
        }

        // 1. Create 10 categories
        $categories = \App\Models\Category::factory(10)->create();

        // 2. Create 90 regular blog posts
        \App\Models\Post::factory(90)->create([
            'user_id' => $user->id,
            'category_id' => fn() => $categories->random()->id,
            'is_journal' => false,
        ]);

        // 3. Create 10 scientific journals
        \App\Models\Post::factory(10)->journal()->create([
            'user_id' => $user->id,
            'category_id' => fn() => $categories->random()->id,
        ]);
    }
}
