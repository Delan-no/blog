<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    public function index()
    {
        $articles = Article::all()->sortByDesc('id');

        return view('layouts.articles', compact('articles'));
    }
    public function show($id)
    {
        $article = Article::with('user')->with([
            'comments' => function ($query) {
                $query->with('user');
            }
        ])->findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {
        // vérification des permissions plus tard
        $user = User::find(1);
        $request['user_id'] = $user->id;

        $this->validate($request, [
            'title' => 'required|string',
            'body' => 'required|string',
            'user_id' => 'required|numeric|exists:users,id',
        ]);
        // $art = Article::create($request->all());
        //dd($art);
        Article::create($request->all());
        return redirect('/articles')->with(['success_message' => 'L\'article a été crée !']);
    }

    public function edit(Article $article)
    {
        return view('/articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return view('/articles.edit', compact('article'));
    }

    public function delete(Article $article)
    {
        $article->delete();
    }


}