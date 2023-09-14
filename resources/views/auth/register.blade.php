<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
    <title>Register</title>
</head>

<body>
    <div class="container">
        <h2> Inscription</h2>

        <form action="/register" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                {{-- @error('name')
                    <div>{{ $message }}</div>
                @enderror --}}
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                {{-- @error('email')
                    <div>{{ $message }}</div>
                @enderror --}}
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                {{-- @error('pswd')
                    <div>{{ $message }}</div>
                @enderror --}}
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password confirmation:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter now password" name="password">
                {{-- @error('pswd')
                    <div>{{ $message }}</div>
                @enderror --}}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>

</html>
