<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redirection</title>
</head>

<body>
    <div class="container">

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                <strong>{{ session()->get('success_message') }}</strong>
            </div>
        @endif
        @if (session()->has('warning_message'))
            <div class="alert alert-warning">
                <strong>{{ session()->get('warning_message') }}</strong>
            </div>
        @endif
        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                <strong>{{ session()->get('error_message') }}</strong>
            </div>
        @endif
    </div>
</body>

</html>
