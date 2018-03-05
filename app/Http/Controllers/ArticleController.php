<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\ArticleCategory;

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
        $categories = ArticleCategory::all();
    	return view('articles.edit', compact('article'));
    }

    public function create()
    {
        $categories = ArticleCategory::all();
        $article = new Article();
    	return view('articles.create', compact('article'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $category = ArticleCategory::find($data['category_id']);
        $article = new Article($data);
        $article->category()->associate($category);
    	$article->save();

    	return redirect()->route('articles.index');
    }

    public function update(Request $request, Article $article)
    {
        $data = $request->all();
        $category = ArticleCategory::find($data['category_id']);
        $article->category()->associate($category);
        $article->update($data);

        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index');
    }

}
