<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hello world</title>
    <style>


    </style>
</head>
<body>
    <h1>HELLO WORLD!</h1>
    <header>
        <h2>MVC Fundamentals:</h2>

        <nav>
            <ul>
                <li><a href="{{ route('model') }}">Model</a></li>
                <li><a href="{{ route('view') }}">View</a></li>
                <li><a href="{{ route('controller') }}">Controller</a></li>
            </ul>
        </nav>
    </header>
    <hr>

    <h2>This page is made in {{ $name }} framework.</h2>
    <h3>There are other PHP frameworks as:</h3>
    <ul>
        @foreach ($frameworks as $framework)
        <li>{{$loop->iteration}} : {{ $framework }}</li>
        @endforeach
    </ul>
</body>
</html>
