<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
        <title>Laravel Comics</title>
    </head>
    <body>
        @include('partials.header')
        @include('partials.jumbotron')
        <main class="p-rel">
            <button class="my-btn"><h1 class="uppercase">Current series</h1></button>
            <div class="container">
                @foreach ($comics as $item)
                    @include('partials.card')
                @endforeach
            </div>
            <button class="my-btn"><h4 class="uppercase">Load more</h4></button>
        </main>
        @include('partials.main_btm')
        @include('partials.footer')
    </body>
</html>