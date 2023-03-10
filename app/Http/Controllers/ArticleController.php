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
    public function list(Request $request){
        $articles = Article::where('category_id', 1)->paginate(3);
        if ($request->ajax()) {
            return view('pages.content_page', ['articles' => $articles])->render();
        }
        return view('pages/list',compact('articles'));
    }
}
