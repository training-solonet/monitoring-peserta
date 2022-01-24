<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "judul hari pertama",
            "slug" => "judul-hari-pertama",
            "author" => "Mohamadn zidane f",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas distinctio aperiam officia quam error maxime animi ipsa. Nulla, quo unde et praesentium voluptas autem, debitis recusandae soluta dolores inventore totam quis dolore modi magni eum omnis libero. Eligendi tempore, corporis dolores odit esse quas, eos beatae totam amet enim quis?"
        ],
        [
            "title" => "judul hari Klobot",
            "slug" => "judul-hari-kedua",

            "author" => "Klobot zidane f",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas distinctio aperiam officia quam error maxime animi ipsa. Nulla, quo unde et praesentium voluptas autem, debitis recusandae soluta dolores inventore totam quis dolore modi magni eum omnis libero. Eligendi tempore, corporis dolores odit esse quas, eos beatae totam amet enim quis?"
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();    
    return $posts->firstWhere('slug', $slug);
        }
}
