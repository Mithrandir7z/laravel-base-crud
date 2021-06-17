<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Fumetti disponibili</h1>


    @foreach ($comics as $comic)
        <ul>
            <li>
                <a href="{{ route('comics.show', [
                                'comic' => $comic->id
                    ]) }}">

                    {{$comic->title}}
                </a>

                <div>
                    <a href="{{ route('comics.edit', [
                                'comic' => $comic->id
                            ]) }}" class="btn btn-secondary">
                                Modifica prodotto
                </a>
                </div>
            </li>
        </ul>
    @endforeach

    <a href="{{route('comics.create')}}">Aggiungi un fumetto</a>

</body>
</html>