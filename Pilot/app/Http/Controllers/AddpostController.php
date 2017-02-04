<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

class AddpostController extends Controller
{
    public function index()
    {
        return view('Addpost/addpost');
    }

    public function store(Request $data)
    {
        Article::create([
            'title' => $data['title'],
            'user' => $data['user'],
            'para' => $data['para'],
            'published' => date("y-m-d"),
            'tags' => $data['tags'],
            'comments' => '',
        ]);
        return view('dashboard');
    }
}
