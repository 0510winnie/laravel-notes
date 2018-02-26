<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        $count = Article::count();

   		return view('articles.index', compact('articles', 'count'));
    }

    public function show(Article $article)
    {
   		return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
    	return view('articles.edit', compact('article'));
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function store(Request $request)
    {
    	$data = $request->all();

    	$article = new Article($data);
    	$article->save();

    	return redirect()->route('articles.index');
    }

    public function update(Request $request, Article $article)
    {
        $data = $request->all();
        $article->update($data);

        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index');
    }

}
