<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' ' . $category->name;
        }

        return view('blog', [
            "title" => "All Posts" . $title,
            // "posts" => Post::all() //all() untuk menampilkan data secara default, latest() untuk menampilkan data yang baru ditambahkan(terbaru)
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Single Post", 
            "post" => $post
        ]);
    }
}
