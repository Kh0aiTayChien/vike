<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function show(){
        $articles = Article::getArticlesByCategoryId(1);
        return view('pages/index', compact('articles'));
    }
}
