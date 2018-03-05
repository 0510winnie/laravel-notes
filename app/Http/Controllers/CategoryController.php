<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleCategory;

class CategoryController extends Controller
{
    public function index($id){

    	// 1. find the category by id. 
    	// 2. and get articles belong to the category.
    	$category = ArticleCategory::find($id);
    	// SELECT * FROM article_categories WHERE id = $id
    	$articles = $category->articles;

    	return view('category.index', compact('category', 'articles'));
    }
}

