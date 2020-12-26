<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Bakes</title>
</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-12">
            <div class="shadow p-2 mb-2 m-2 bg-white rounded"><h1 class="text-center p-2 font-weight-bold">{{ $bake->title }}</h1></div>
            <div class="shadow p-1 mb-1 m-1 bg-white rounded"><h1 class="text-center p-1 font-weight-bold">{{ $bake->price }}</h1></div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img-global.cpcdn.com/recipes/f92b7daccb301b7819723302b9811e43b3142ada9f42777fdb0fc40d634c33a8/751x532cq70/pirogh-s-ryboi-iz-drozhzhievogho-tiesta-rietsiept-%D0%BE%D1%81%D0%BD%D0%BE%D0%B2%D0%BD%D0%BE%D0%B5-%D1%84%D0%BE%D1%82%D0%BE-%D1%80%D0%B5%D1%86%D0%B5%D0%BF%D1%82%D0%B0.jpg" class="d-block w-100"
                             alt="пирог">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.tsn.ua/cached/1603812263/tsn-6e978378ae92c65695fd0f636310ff71/thumbs/1340x530/1a/20/1457e24ff6c02e736f8d63918218201a.jpeg" class="d-block w-100"
                             alt="пирог">
                    </div>
                    <div class="carousel-item">
                        <img src="https://mtdata.ru/u29/photo17B8/20711368744-0/original.jpg" class="d-block w-100"
                             alt="пирог">
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
                <a href="{{ route('bakes.index') }}" class="btn btn-outline-dark m-3 font-weight-bold">К списку выпечки</a>
                <a href="{{ route('shops.index') }}" class="btn btn-outline-dark m-3 font-weight-bold">Назад в магазин</a>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
