
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Shops</title>
</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-12">
            <div class="shadow p-2 mb-2 m-2 bg-white rounded"><h1 class="text-center p-2 font-weight-bold">{{$shop->address }}</h1></div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://grizli.club/images/files/images/c5e5e207ea26a04043cbc1c746857f47.jpg" class="d-block w-100"
                             alt="магазин">
                    </div>
                    <div class="carousel-item">
                        <img src="https://happyinspain.com/assets/uploads/2014/11/mariscada.jpg" class="d-block w-100"
                             alt="морепродукты">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn24.img.ria.ru/images/07e4/06/05/1572510197_0:270:3072:1997_1920x0_80_0_0_c00abb5fa73a72408057e8f2b2eb07e9.jpg" class="d-block w-100"
                             alt="продавец">
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
                <a href="{{ route('shops.index') }}" class="btn btn-outline-dark m-3 font-weight-bold">Назад в магазин</a>
            </div>
        </div>
    </div>
</div>

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
