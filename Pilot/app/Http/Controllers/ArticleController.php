<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function init($artid)
    {
        return view('Article/article', compact('artid'));
    }
}
