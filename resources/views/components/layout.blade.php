<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
<nav class="container-fluid">
    <div class="row nav_row">
        <div class="col-6"><h1>sito.it</h1></div>
        <div class="col-6 d-flex justify-content-evenly align-items-center">
            <a class="a" href=""><div>altro pulsante</div></a>
            <a class="a" href="{{route('home')}}"> <div>home</div></a>
            <a class="a" href="{{route('add_article')}}"><div>pubblica articolo</div></a>
        </div>
    </div>
</nav>
{{$slot}}
</body>
</html>