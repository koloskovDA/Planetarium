<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>
</head>
<body>
<br />
<div class="container box">
    <h3 align="center"><a href="{{route('admin')}}">Серии наблюдений</a> / <a href="{{route('texts')}}">Тексты</a></h3><br />

    @if(isset(Auth::user()->email))
        <div class="alert alert-danger success-block">
            <strong>Админ: {{ Auth::user()->email }}</strong>
            <br />
            <a href="{{ url('/logout') }}">Выйти из системы</a>
        </div>
    @else
        <script>window.location = "/login";</script>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('saveEditedText', $text)}}" class="form-group" method="post">
        @csrf
        <input type="hidden" value="{{$text->id}}" name="id">
        <label for="">Заголовок (рус)</label>
        <input type="text" class="form-control" name="title_ru" value="{{$text->title_ru}}">
        <label for="">Заголовок (анг)</label>
        <input type="text" class="form-control" name="title_en" value="{{$text->title_en}}">
        <label for="">Текст (рус)</label>
        <textarea name="text_ru" class="form-control" id="" cols="30" rows="10">{{$text->text_ru}}</textarea>
        <label for="">Текст (анг)</label>
        <textarea name="text_en" class="form-control" id="" cols="30" rows="10">{{$text->text_en}}</textarea>
        <input type="submit" value="Сохранить" class="btn btn-success">
    </form>
    <br />
</div>
</body>
</html>
