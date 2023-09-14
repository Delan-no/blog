@extends('layouts.master')

@section('title')
   
@endsection

@section('content')
    <h2>Articles</h2>
    @if ($articles)
        @foreach ($articles as $article)
            <p><strong>{{ $article['user']['name'] }}</strong></p>
            <p>{{ $article['title'] }}</p>
            <p>{{ $article['body'] }}</p>
            <a href="/article/{{ $article->id }}">Article</a>   
        @endforeach
    @else
        <p>Pas d'articles disponible</p>
    @endif
@endsection
