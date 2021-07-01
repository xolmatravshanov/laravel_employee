<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public const defaultCreateCounts = [
        'category'=> 10,
        'blog' => 50,
        'blog_tag' => 60,
        'comment' => 400,
        'offensive_words' => 40,
        'subscriber' => 50,
        'user' => 50,
        'tag' => 50,
    ];


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        /**
         * No Related Models
         */


        // User
        // OffensiveWords
        // Tags
        // Categories

        $this->call([
            UserSeeder::class,
            OffensiveWordSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
        ]);


        $this->call([
            BlogSeeder::class,
            BlogTagSeeder::class,
            CommentSeeder::class,
            SubscriberSeeder::class,
        ]);

        /**
         * Related Models
         */

        // Blog -> user_id
        // Blog_tag -> blog_id, tag_id
        // Comment ->user_id blog_id
        // Subscriber -> writer_id, subscriber_id => reader_id



            /* \App\Models\User::factory(self::defaultCreateCounts['user'])
                ->create()->each(function ($user) {
                    Blog::factory(self::defaultCreateCounts['blog'])->create(['user_id' => $user->id])->each(function ($blog) {

                    });
                });*/

            /*

        */
    }
}
