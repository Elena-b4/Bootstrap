<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Shops</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{ route('shops.store') }}" method="get">
                <div class="form-group">
                    <label for="exampleInputEmail1">Адрес</label>
                    <input type="text" class="form-control" name="address" id="address">
                    <small id="emailHelp" class="form-text text-muted">Введите адрес.</small>
                </div>
                @error('address')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Морепродуты</label>
                    <select class="form-control" name="seafood_id" id="seafood_id">
                        @foreach($shops as $shop)
                            <option
                                value="{{ $shop->seafood_id }}">{{ $shop->seafood->title }}</option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Водоросли</label>
                        <select class="form-control" name="seafood_id" id="seafood_id">
                            @foreach($shops as $shop)
                                <option
                                    value="{{ $shop->algae_id }} ">{{ $shop->algae->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Речная рыба</label>
                        <select class="form-control" name="seafood_id" id="seafood_id">
                            @foreach($shops as $shop)
                                <option
                                    value="{{ $shop->river_Fish_id }} {{ $shop->river_Fish_id === $shop->river_Fish->id ? ' selected' : '' }}">{{ $shop->river_Fish->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Морская рыба</label>
                        <select class="form-control" name="seafood_id" id="seafood_id">
                            @foreach($shops as $shop)
                                <option
                                    value="{{ $shop->sea_Fish_id }}">{{ $shop->sea_Fish->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Выпечка с рыбой</label>
                    <select class="form-control" name="seafood_id" id="seafood_id">
                        @foreach($shops as $shop)
                            <option
                                value="{{ $shop->bake_id }}">{{ $shop->bake->title }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
