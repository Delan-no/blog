<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    
    @if (count($article->comments)>0)

    @foreach ($article->comments as $comment)
        <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
        <p>{{ $comment->comment }}</p>
        <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
    @endforeach 

    @else
    
        <p> Pas de commentaire pour cet article</p>
     
    @endif

    <a href="/article/{{ $article->id }}/edit">Éditer l'article</a>


</body>

</html>
