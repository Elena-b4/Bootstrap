<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Bakes</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{ route('bakes.update', $bake->id) }}" method="get">
                <div class="form-group">
                    <label for="exampleInputEmail1">Название выпечки</label>
                    <input value="{{ $bake->title }}" type="text" class="form-control" name="title" id="title">
                    <small id="emailHelp" class="form-text text-muted">Введите название выпечки.</small>
                </div>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputPassword1">Цена</label>
                    <input value="{{ $bake->price }}" type="integer" class="form-control" name="price" id="price">
                </div>
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
