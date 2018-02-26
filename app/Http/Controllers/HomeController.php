<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    public function index()
    {
    	$articles = Article::all();

 		return view('articles', [
 			'articles' => $articles
 		]);
    }

    public function path($id)
    {
    	return view('path', [
    		'id' => $id
    	]);
    }
}
