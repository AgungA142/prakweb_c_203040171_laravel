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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Agung Alfatah',
            'email' => 'agung.alfatah43@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Ryan Aja',
            'email' => 'Ryansipalingganteng@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' =>1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsa qui, odit aliquam eligendi',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsa qui, odit aliquam eligendi ex et repellendus incidunt numquam ipsum fugiat reprehenderit praesentium doloribus mollitia esse illum provident sequi quasi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique soluta, a, neque, cum aut doloribus facere dolor dolore recusandae architecto dignissimos! Facilis fugiat, ab deserunt libero qui sunt ipsa!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam necessitatibus eligendi totam tenetur expedita numquam exercitationem odit delectus dicta repudiandae quos obcaecati ducimus sequi, accusantium, illo laborum iste. Voluptas voluptates ea ipsam numquam dolore, sint non quasi saepe voluptatum explicabo.</p>'
        ]);
        Post::create([
            'title' => 'Judul kedua',
            'category_id' => 1,
            'user_id' =>2,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsa qui, odit aliquam eligendi',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsa qui, odit aliquam eligendi ex et repellendus incidunt numquam ipsum fugiat reprehenderit praesentium doloribus mollitia esse illum provident sequi quasi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique soluta, a, neque, cum aut doloribus facere dolor dolore recusandae architecto dignissimos! Facilis fugiat, ab deserunt libero qui sunt ipsa!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam necessitatibus eligendi totam tenetur expedita numquam exercitationem odit delectus dicta repudiandae quos obcaecati ducimus sequi, accusantium, illo laborum iste. Voluptas voluptates ea ipsam numquam dolore, sint non quasi saepe voluptatum explicabo.</p>'
        ]);
        Post::create([
            'title' => 'Judul ketiga',
            'category_id' => 2,
            'user_id' =>1,
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsa qui, odit aliquam eligendi',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsa qui, odit aliquam eligendi ex et repellendus incidunt numquam ipsum fugiat reprehenderit praesentium doloribus mollitia esse illum provident sequi quasi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique soluta, a, neque, cum aut doloribus facere dolor dolore recusandae architecto dignissimos! Facilis fugiat, ab deserunt libero qui sunt ipsa!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam necessitatibus eligendi totam tenetur expedita numquam exercitationem odit delectus dicta repudiandae quos obcaecati ducimus sequi, accusantium, illo laborum iste. Voluptas voluptates ea ipsam numquam dolore, sint non quasi saepe voluptatum explicabo.</p>'
        ]);
        Post::create([
            'title' => 'Judul keempat',
            'category_id' => 2,
            'user_id' =>2,
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsa qui, odit aliquam eligendi',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsa qui, odit aliquam eligendi ex et repellendus incidunt numquam ipsum fugiat reprehenderit praesentium doloribus mollitia esse illum provident sequi quasi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique soluta, a, neque, cum aut doloribus facere dolor dolore recusandae architecto dignissimos! Facilis fugiat, ab deserunt libero qui sunt ipsa!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam necessitatibus eligendi totam tenetur expedita numquam exercitationem odit delectus dicta repudiandae quos obcaecati ducimus sequi, accusantium, illo laborum iste. Voluptas voluptates ea ipsam numquam dolore, sint non quasi saepe voluptatum explicabo.</p>'
        ]);
    }
}
