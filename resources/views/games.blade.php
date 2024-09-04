<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games List</title>
</head>
<body>
    <h1>Games List</h1>
    <ul>
        @foreach ($games as $game)
            <li>
                <strong>Title:</strong> {{ $game->title }} <br>
                <strong>Developer:</strong> {{ $game->developer }} <br>
                <strong>Genres:</strong> {{ implode(', ', $games->genres) }}
            </li>
        @endforeach
    </ul>
</body>
</html>
