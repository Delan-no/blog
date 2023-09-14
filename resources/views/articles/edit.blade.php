<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit/Modification</title>
</head>

<body>
    @extends('layouts.master')

    @section('title')
        Éditer l'article {{ $article->title }}
    @endsection

    @section('content')

        <form action="/article/{{ $article->id }}/edit" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            @include('partials.article-form')
        </form>

        <form action="/article/{{ $article->id }}/delete" method="POST" class="mt-4">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-primary" value="Effacer l'article">
        </form>
        
    @endsection
</body>

</html>
