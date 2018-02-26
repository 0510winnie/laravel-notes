<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
   		$articles = Article::latest()->get();

   		return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
   		$article = Article::find($id);

   		return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
    	$article = Article::find($id);

    	return view('articles.edit', compact('article'));
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function store(Request $request)
    {
    	$data = $request->all();

    	$article = new Article;
    	$article->title = $data['title'];
    	$article->content = $data['content'];
    	$article->save();

    	return redirect()->route('articles.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $article = Article::find($id);
        $article->title = $data['title'];
        $article->content = $data['content'];
        $article->save();

        return redirect()->route('articles.index');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('articles.index');
    }

}
