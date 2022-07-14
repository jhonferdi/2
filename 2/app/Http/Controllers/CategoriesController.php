<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(){
        return view('categories', [
            "title" => "Post Categories",
            "categories" => Category::all()
        ]);
    }

    public function show(Category $category){
        return view('blog', [
            'title' => "Category : $category->name",
            'posts' => $category->posts->load('category', 'user')
        ]);
    }
}
