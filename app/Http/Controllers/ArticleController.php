<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ArticleController extends Controller
{
    public function index($slug){
        $article = Article::where('slug',$slug)->firstOrFail();
        return view('pages/new',compact('article'));
    }
    public function list(){
        $articles = Article::where('category_id', 1)->paginate(6);
        return view('pages/list',compact('articles'));
    }
}
