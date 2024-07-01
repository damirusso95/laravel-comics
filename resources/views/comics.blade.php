<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>comics</title>
</head>
<body>
    @include('header')
    <div class="comics-container">
        @foreach ($comics as $comic)
            <div class="comic-card">
                <h2>{{ $comic['title'] }}</h2>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
        @endforeach
    </div>
</body>
</html>
