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
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    @endforeach
</body>

</html>