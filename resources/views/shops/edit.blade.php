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
            <form action="{{ route('shops.update', $shop->id) }}" method="get">
                <div class="form-group">
                    <label for="exampleInputEmail1">Адрес</label>
                    <input value="{{ $shop->address }}" type="text" class="form-control" name="address" id="address">
                    <small id="emailHelp" class="form-text text-muted">Введите адрес.</small>
                </div>
                @error('address')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Морепродуты</label>
                    <select class="form-control" name="seafood_id" id="seafood_id">
                        @foreach($seafoods as $seafood)
                            <option
                                value="{{ $seafood->id }}" {{ $seafood->id === $shop->seafood->id ? ' selected' : '' }}>{{ $seafood->title }}</option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Водоросли</label>
                        <select class="form-control" name="algae_id" id="algae_id">
                            @foreach($algaes as $algae)
                                <option
                                    value="{{ $algae->id }}" {{ $algae->id === $shop->algae->id ? ' selected' : '' }}>{{ $algae->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Речная рыба</label>
                        <select class="form-control" name="river_fish_id" id="river_fish_id">
                            @foreach($riverFishes as $riverFish)
                                <option
                                    value="{{ $riverFish->id }}" {{ $riverFish->id === $shop->river_Fish->id ? ' selected' : '' }}>{{ $riverFish->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Морская рыба</label>
                        <select class="form-control" name="sea_fish_id" id="sea_fish_id">
                            @foreach($seaFishes as $seaFish)
                                <option
                                    value="{{ $seaFish->id }}" {{ $seaFish->id === $shop->sea_Fish->id ? ' selected' : '' }}>{{ $seaFish->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Выпечка с рыбой</label>
                    <select class="form-control" name="bake_id" id="bake_id">
                        @foreach($bakes as $bake)
                            <option
                                value="{{ $bake->id }}" {{ $bake->id === $shop->bake->id ? ' selected' : '' }}>{{ $bake->title }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
