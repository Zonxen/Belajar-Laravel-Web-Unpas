<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Jovan Emmanuel",
        "email" => "jovaneah@gmail.com",
        "image" => "https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Jovan Emmanuel",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, illo nostrum repudiandae dolore neque consequatur commodi ipsa fugit delectus, voluptatibus ratione, qui rerum ullam atque quo accusantium perspiciatis inventore dignissimos odio sunt officiis porro quasi optio? Excepturi, obcaecati? Aut obcaecati porro maxime quae, veniam dolorum beatae reiciendis quaerat quo ullam qui, itaque odit accusamus perspiciatis possimus, nisi quibusdam? Illo, temporibus cupiditate eos rerum velit iusto aliquam dolorum tenetur ex id, sunt minus itaque et a exercitationem autem labore accusamus ipsam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kevin Joel",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, illo nostrum repudiandae dolore neque consequatur commodi ipsa fugit delectus, voluptatibus ratione, qui rerum ullam atque quo accusantium perspiciatis inventore dignissimos odio sunt officiis porro quasi optio? Excepturi, obcaecati? Aut obcaecati porro maxime quae, veniam dolorum beatae reiciendis quaerat quo ullam qui, itaque odit accusamus perspiciatis possimus, nisi quibusdam? Illo, temporibus cupiditate eos rerum velit iusto aliquam dolorum tenetur ex id, sunt minus itaque et a exercitationem autem labore accusamus ipsam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, illo nostrum repudiandae dolore neque consequatur commodi ipsa fugit delectus, voluptatibus ratione, qui rerum ullam atque quo accusantium perspiciatis inventore dignissimos odio sunt officiis porro quasi optio? Excepturi, obcaecati? Aut obcaecati porro maxime quae, veniam dolorum beatae reiciendis quaerat quo ullam qui."
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('/senja', function(){
    return 'Senja memang indah, namun tak seindah dirimu';
});

// halaman single post

Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Jovan Emmanuel",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, illo nostrum repudiandae dolore neque consequatur commodi ipsa fugit delectus, voluptatibus ratione, qui rerum ullam atque quo accusantium perspiciatis inventore dignissimos odio sunt officiis porro quasi optio? Excepturi, obcaecati? Aut obcaecati porro maxime quae, veniam dolorum beatae reiciendis quaerat quo ullam qui, itaque odit accusamus perspiciatis possimus, nisi quibusdam? Illo, temporibus cupiditate eos rerum velit iusto aliquam dolorum tenetur ex id, sunt minus itaque et a exercitationem autem labore accusamus ipsam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kevin Joel",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, illo nostrum repudiandae dolore neque consequatur commodi ipsa fugit delectus, voluptatibus ratione, qui rerum ullam atque quo accusantium perspiciatis inventore dignissimos odio sunt officiis porro quasi optio? Excepturi, obcaecati? Aut obcaecati porro maxime quae, veniam dolorum beatae reiciendis quaerat quo ullam qui, itaque odit accusamus perspiciatis possimus, nisi quibusdam? Illo, temporibus cupiditate eos rerum velit iusto aliquam dolorum tenetur ex id, sunt minus itaque et a exercitationem autem labore accusamus ipsam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, illo nostrum repudiandae dolore neque consequatur commodi ipsa fugit delectus, voluptatibus ratione, qui rerum ullam atque quo accusantium perspiciatis inventore dignissimos odio sunt officiis porro quasi optio? Excepturi, obcaecati? Aut obcaecati porro maxime quae, veniam dolorum beatae reiciendis quaerat quo ullam qui."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});