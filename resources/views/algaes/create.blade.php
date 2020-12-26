<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Algaes</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{ route('algaes.store') }}" method="get">
                <div class="form-group">
                    <label  for="exampleInputEmail1">Название водоросли</label>
                    <input value="{{ old('title') }}" type="text" class="form-control" name="title" id="title">
                    <small id="emailHelp" class="form-text text-muted">Введите название водоросли.</small>
                </div>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputPassword1">Цена</label>
                    <input value="{{ old('price') }}" type="integer" class="form-control" name="price" id="price">
                </div>
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
