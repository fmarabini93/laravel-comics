<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
        <title>Laravel Comics</title>
    </head>
    <body>
        @include('partials.header')
        @include('partials.jumbotron')
        <main>
            <div class="container">
                @foreach ($comics as $item)
                    @include('partials.card')
                @endforeach
            </div>
        </main>
    </body>
</html>