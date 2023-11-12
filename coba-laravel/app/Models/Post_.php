<?php

namespace App\Models;


class Post  
{
    private static $blog_posts= [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Priamitra",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eaque, mollitia exercitationem doloribus numquam est suscipit sequi voluptate adipisci laudantium. Repellendus, fugit quo officiis nostrum magnam esse hic asperiores, illo dolore eum ab! Fugiat repellat repellendus deleniti, perferendis, doloremque quibusdam veniam at distinctio ad dignissimos sed eos accusantium ipsum suscipit ut voluptate maxime corporis amet magni hic perspiciatis? Iste, hic placeat. Recusandae porro facere corrupti minima cumque alias dolorem non quisquam sint, suscipit distinctio qui laboriosam modi sit perferendis. Harum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Diva",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aliquid magnam laudantium facere cum quo obcaecati ducimus fugit at soluta voluptatum laboriosam esse illum libero tenetur perferendis iure omnis repellendus laborum totam, vitae architecto. Accusamus quibusdam eos provident ea ratione mollitia harum quos voluptates dolorem nesciunt ullam reiciendis, voluptate fugit eum eveniet officia perspiciatis exercitationem deserunt. Totam modi iste odit dolorem adipisci eum corrupti doloremque minus, mollitia quaerat reiciendis dolorum eveniet quo nemo laboriosam quos sapiente perferendis voluptatum vitae esse ut culpa. Cumque totam, sequi, modi debitis tempore voluptate fuga facere aspernatur maiores eum cupiditate nemo dignissimos, magnam quidem architecto!"
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
        }

}
