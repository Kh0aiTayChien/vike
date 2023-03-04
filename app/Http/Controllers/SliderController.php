<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Banner;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function show(){
        $articles = Article::getArticlesByCategoryId(1);
        $banner = Banner::all()->first();
        return view('pages/index', compact(['articles','banner']));
    }
}
