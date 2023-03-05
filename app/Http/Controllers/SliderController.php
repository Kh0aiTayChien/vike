<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Banner;
use Revolution\Google\Sheets\Facades\Sheets;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function show(){
        $articles = Article::getArticlesByCategoryId(1);
        $banner = Banner::all()->first();
        return view('pages/index', compact(['articles','banner']));
    }
    public function send(Request $request){
        Sheets::spreadsheet(config('sheet.spreadsheet_id'));

        $row =[$request->name, $request->phone,$request->email];
        $rows= array($row);
        Sheets::sheet('chien')->append($rows);
    }
}
