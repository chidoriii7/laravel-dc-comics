<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dc-comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    
    @foreach ($comics as $comic)
    <div>
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $comic->price }}</li>
                <li class="list-group-item">{{ $comic->series }}</li>
                <li class="list-group-item">{{ $comic->type }}</li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Artisti: {{ $comic->artists }}</li>
                <li class="list-group-item">Scrittori: {{ $comic->writers }}</li>
                <li class="list-group-item">In commercio dal:{{ $comic->sale_date }}</li>
            </ul>
        </div>
    </div>
    @endforeach
</body>

</html>