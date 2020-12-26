<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Algaes</title>
</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-12">
            <div class="shadow p-2 mb-2 m-2 bg-white rounded"><h1 class="text-center p-2 font-weight-bold">{{ $algae->title }}</h1></div>
            <div class="shadow p-1 mb-1 m-1 bg-white rounded"><h1 class="text-center p-1 font-weight-bold">{{ $algae->price }}</h1></div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cdnimg.rg.ru/img/content/183/17/49/1933_d_850.jpg" class="d-block w-100"
                             alt="водоросли">
                    </div>
                    <div class="carousel-item">
                        <img src="https://restoranoff.ru/upload/iblock/ffd/laminaria1.jpg" class="d-block w-100"
                             alt="водоросли">
                    </div>
                    <div class="carousel-item">
                        <img src="https://glavcom.ua/img/gallery/3932/35/198109_big.jpg" class="d-block w-100"
                             alt="водоросли">
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
                <a href="{{ route('algaes.index') }}" class="btn btn-outline-dark m-3 font-weight-bold">К списку водорослей</a>
                <a href="{{ route('shops.index') }}" class="btn btn-outline-dark m-3 font-weight-bold">Назад в магазин</a>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
