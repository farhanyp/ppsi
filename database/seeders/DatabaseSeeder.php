<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //   'name' => 'Farhan Yudha Pratama',  
        //   'email' => 'farhan@gmail.com',
        //   'password' => bcrypt('123')
        // ]);

        // User::create([

        //     'name' => 'Muhammad Yp',  
        //     'email' => 'yp@gmail.com',
        //     'password' => bcrypt('123')
        //   ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Tech',  
            'slug' => 'tech'
          ]);

          Category::create([
            'name' => 'People',  
            'slug' => 'people',
          ]);

          Category::create([
            'name' => 'Nature',  
            'slug' => 'nature',
          ]);

          Post::factory(20)->create();
    }
}
