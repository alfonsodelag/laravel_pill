<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    public function save(Request $request)
    {
        print_r($request->input());
        $articles= new Article;
        $articles->article_title = $request->article_title;
        $articles->article_summary= $request->article_summary;
        $articles->slug_article= $request->slug_article;
        $articles->article_content= $request->article_content;
        $articles->save();
        return redirect('viewarticles');
    }

    public function index(Request $request)
    {
        $articles = Article::all()->toArray();
        return view('viewarticles', compact('articles'));
    }

    public function showArticle(Request $request)
    {
        $article = Article::first();
        return view('showarticle', compact('article'));
    }

    public function showSlug(Request $request)
    {

    }
}
