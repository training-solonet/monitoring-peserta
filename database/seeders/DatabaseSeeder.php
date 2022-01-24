<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
            'name' => 'Mohamad Zidane Firmansyah',
            'username' => 'klobot',
            'email' => 'kingdanone1412@gmail.com',
            'password' => bcrypt('1412')
        ]);

        // User::create([
        //     'name' => 'Sugeng',
        //     'email' => 'wozu.id@gmail.com',
        //     'password' => bcrypt('1412')
        // ]);





        User::factory(3)->create();

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-progamming'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'laravel',
            'slug' => 'laravel'
        ]);

        Post::factory(20)->create();







        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'lorem ipsum',
        //     'body' => 'lorem ipsum lorem ipsum',
        //     'category_id' => 1,
        //     'user_id' => 1
            
        // ]);

        // Post::create([
        //     'title' => 'Judul KEtiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'lorem ipsum',
        //     'body' => 'lorem ipsum lorem ipsum',
        //     'category_id' => 2,
        //     'user_id' => 2
            
        // ]);
    }
}
