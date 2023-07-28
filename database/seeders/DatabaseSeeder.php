<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;
use  \App\Models\User;
use Spatie\FlareClient\Truncation\TruncationStrategy;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Listing::truncate();
        Post::truncate();
        Comment::truncate();

        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Listing::factory(5)->create();
        Post::factory(12)->create();
        Category::create(
            [
                'name' => 'Personal',
                'slug' => 'Personal'
            ]
        );
        Category::create(
            [
                'name' => 'Family',
                'slug' => 'Family'
            ]
        );
        Category::create(
            [
                'name' => 'Work',
                'slug' => 'Work'
            ]
        );

        Comment::factory(10)->create();
    }
}
