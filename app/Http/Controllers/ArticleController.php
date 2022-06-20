<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $post = new Article;
        $post->title = $request->title;
        $post->imgUrl = $request->imgUrl;
        $post->description = $request->description;
        $post->save();
        return redirect('articles');
        // return redirect('articles')->with('status', 'Nuevo artículo insertado');
    }
}