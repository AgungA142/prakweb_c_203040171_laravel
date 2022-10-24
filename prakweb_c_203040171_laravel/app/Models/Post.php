<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
         "title" => "Postingan Pertama",
         "slug" => "postingan-pertama",
         "author" => "Agung Alfatah",
         "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et excepturi illum, explicabo ducimus rem perferendis, incidunt vel sapiente esse consequuntur rerum nulla fuga ratione, magnam totam officia. Fugit eius corporis voluptatem reprehenderit id recusandae nostrum officia voluptates voluptas ab, assumenda ipsum sed provident odit sunt earum nobis ut eum tempore aperiam ratione ea quae mollitia? Voluptate atque ipsam cupiditate ipsa. Dolores magnam ad corrupti magni iste atque quod excepturi velit obcaecati recusandae! Magnam, quibusdam. Cumque minus laudantium modi reprehenderit quo!"
        ],
        [
         "title" => "Postingan Kedua",
         "slug" => "postingan-kedua",
         "author" => "Ryan Aja",
         "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et excepturi illum, explicabo ducimus rem perferendis, incidunt vel sapiente esse consequuntur rerum nulla fuga ratione, magnam totam officia. Fugit eius corporis voluptatem reprehenderit id recusandae nostrum officia voluptates voluptas ab, assumenda ipsum sed provident odit sunt earum nobis ut eum tempore aperiam ratione ea quae mollitia? Voluptate atque ipsam cupiditate ipsa. Dolores magnam ad corrupti magni iste atque quod excepturi velit obcaecati recusandae! Magnam, quibusdam. Cumque minus laudantium modi reprehenderit quo!"
        ]
     ];
    Public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
        // $post =[];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug) {
        //     $post = $p;
        //     }
        // }
        return $posts ->firstWhere('slug', $slug);
    }
}
