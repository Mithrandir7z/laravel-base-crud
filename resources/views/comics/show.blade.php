<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>

    <a href="{{route('comics.index')}}">Torna indietro</a>


    <h1>{{$comics->title}}</h1>

    <img src="{{$comics->image}}" alt="{{$comics->title}}">

    <p>Price: {{$comics->price}}</p>

</body>
</html>