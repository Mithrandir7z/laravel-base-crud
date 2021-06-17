<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
    <section>
        <div class="container">
            <h1>Modifica un fumetto</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Edit form --}}
            <form action="{{ route('comics.update', ['comic' => $comics->id]) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                </div>


                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" name="image" id="image" value="{{ old('image') }}">
                </div>

                <div class="form-group">
                    <label for="cooking_time">Prezzo</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}">
                </div>


                <input type="submit" class="btn btn-primary" value="Modifica Fumetto">
            </form>
            {{-- End edit form --}}
        </div>
    </section>

</body>
</html>