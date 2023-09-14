<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <title>Formulaire</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Creation d'article</h1>
        <form method="POST" action="/articles/create" enctype="multipart/form-data">

            @csrf
            {{-- {{csrf_field()}} --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="title" class="form-control" id="title" placeholder="Title" name="title"
                    value="{{ old('title', isset($article->title) ? $article->title : null) }}">
                @error('title')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 mt-3">
                <textarea class="form-control" style="width: 100%" name="body" id="area" placeholder="Body"
                    {{ old('body', isset($article->body) ? $article->body : null) }}></textarea>
                @error('body')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 mt-3">
                <input type="file" name="image" id="name">
                @error('image')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>

        </form>
    </div>
</body>

</html>
