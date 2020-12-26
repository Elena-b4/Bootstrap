<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>riverFish</title>
</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-12">
            <div class="shadow p-2 mb-2 m-2 bg-white rounded"><h1 class="text-center p-2 font-weight-bold">{{ $riverFish->title }}</h1></div>
            <div class="shadow p-1 mb-1 m-1 bg-white rounded"><h1 class="text-center p-1 font-weight-bold">{{ $riverFish->price }}</h1></div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://rybalkavreke.ru/wp-content/uploads/2018/12/plotva.jpg" class="d-block w-100"
                             alt="рыба">
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/originals/19/4a/97/194a97c65f72cf146aab1d88d82ce578.jpg" class="d-block w-100"
                             alt="рыба">
                    </div>
                    <div class="carousel-item">
                        <img src="https://lh3.googleusercontent.com/proxy/qyKx2-lUKkGmEmGmSIhltgN-6pii5UmFY2aR1gpJ_pAcjHrpVRgbrusnEre0RmllnHFh54ULIJTKk9-YZRqjkeDaooFgS5VGD6c4HGV-9bZLB1I-MfdA84UBUut22rNXZq6J9gBv9Q" class="d-block w-100"
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
                <a href="{{ route('riverFishes.index') }}" class="btn btn-outline-dark m-3 font-weight-bold">К списку речной рыбы</a>
                <a href="{{ route('shops.index') }}" class="btn btn-outline-dark m-3 font-weight-bold">Назад в магазин</a>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
