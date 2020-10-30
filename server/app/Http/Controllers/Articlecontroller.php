<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class Articlecontroller extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index', ['articles' => $articles]);
    }
    public function create()
    {
        return view('article.create');
    }
    public function store(Request $request)
    {
        $article = new Article;

        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;
        $article->save();
        return redirect('/articles');
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }
    public function edit($id)
    {
        $article = article::find($id);
        return view('article.edit', ['article' => $article]);
    }
    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $article->taitle = $request->taitle;
        $article->boby = $request->body;

        $article->save();
        return redirect('/articles');
    }
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
