>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les articles</title>
</head>

<body>
    @if ($articles)
        @foreach ($articles as $article)
            <p><strong>{{ $article['user']['name'] }}</strong></p>
            <p>{{ $article['title'] }}</p>
            <p>{{ $article['body'] }}</p>
        @endforeach
    @else
</body>

</html>
