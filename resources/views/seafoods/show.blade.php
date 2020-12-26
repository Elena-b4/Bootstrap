<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>seafood</title>
</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-12">
            <div class="shadow p-2 mb-2 m-2 bg-white rounded"><h1 class="text-center p-2 font-weight-bold">{{ $seafood->title }}</h1></div>
            <div class="shadow p-1 mb-1 m-1 bg-white rounded"><h1 class="text-center p-1 font-weight-bold">{{ $seafood->price }}</h1></div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img.povar.ru/main/97/9d/59/4d/raki_pod_pivo-513805.jpg" class="d-block w-100"
                             alt="морепродукты">
                    </div>
                    <div class="carousel-item">
                        <img src="https://static8.depositphotos.com/1009628/879/i/600/depositphotos_8795291-stock-photo-fresh-squid.jpg" class="d-block w-100"
                             alt="рыба">
                    </div>
                    <div class="carousel-item">
                        <img src="https://static.1000.menu/cookme/images/recipe/krevetki-v-slivochnom-souse-_1290081050_0.jpg" class="d-block w-100"
                             alt="рыба">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row">
                <a href="{{ route('seafoods.index') }}" class="btn btn-outline-dark m-3 font-weight-bold">К списку морепродуктов</a>
                <a href="{{ route('shops.index') }}" class="btn btn-outline-dark m-3 font-weight-bold">Назад в магазин</a>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
