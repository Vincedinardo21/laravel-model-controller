<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <section class="movie-container">
        @foreach($movies as $movie)
            <div class="movie-card">
                <div><b>Titolo: </b>{{$movie->title}}</div>
                <div><b>Titolo originale: </b>{{$movie->original_title}}</div>
                <div><b>Nazionalità: </b>{{$movie->nationality}}</div>
                <div><b>Data: </b>{{$movie->date}}</div>
                <div><b>Voto: </b>{{$movie->vote}}</div>
            </div>          
        @endforeach
    </section>
</body>
</html>