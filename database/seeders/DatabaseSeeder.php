<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //create a user
        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //create 30 post with 15 comments

        // \App\Models\Post::factory(10)->create();
        // \App\Models\Comment::factory(10)->create();

        \App\Models\Post::factory(10)->has(\App\Models\Comment::factory(15))->for($user)->create();

        //create 10 more users
        //\App\Models\User::factory(10)->create();
    }
}
