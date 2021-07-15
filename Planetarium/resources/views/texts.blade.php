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
    <h3 align="center"><a href="{{route('admin')}}">Серии наблюдений</a> / Тексты</h3><br />

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
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>Заголовок</td>
            <td>Управление</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($texts as $text)
            <tr>
                <td>{{$text->title_ru}}</td>
                <td>
                    <a class="btn btn-warning" href="/edit/{{$text->id}}">Изменить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br />
</div>
</body>
</html>

