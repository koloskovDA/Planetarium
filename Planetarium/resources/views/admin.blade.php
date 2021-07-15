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
    <h3 align="center">Серии наблюдений / <a href="{{route('texts')}}">Тексты</a></h3><br />

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
                <td>№ серии</td>
                <td>Начало</td>
                <td>Окончание</td>
                <td>Управление</td>
            </tr>
            <form action="{{route('stage')}}" method="post">
                @csrf
                <tr>
                    <td>
                        <input type="number" name="stage_number" class="form-control">
                    </td>
                    <td>
                        <input type="date" name="starts_at" class="form-control">
                    </td>
                    <td>
                        <input type="date" name="ends_at" class="form-control">
                    </td>
                    <td><input type="submit" value="Добавить" class="btn btn-success" onclick="window.location.reload();"></td>
                </tr>
            </form>
        </thead>
        <tbody>
            @foreach ($stages as $stage)
                <tr>
                    <td>{{$stage->stage_number}}</td>
                    <td>{{$stage->starts_at}}</td>
                    <td>{{$stage->ends_at}}</td>
                    <td>
                        <form method="post" action="/delete/{{$stage->id}}">
                            @csrf
                            <input type="submit" class="btn btn-danger delete-stage" value="Удалить">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br />
</div>
<script>
    $('.delete-stage').click(function(e){
        e.preventDefault()
        if (confirm('Вы уверены?')) {
            $(e.target).closest('form').submit()
        }
    });
</script>
</body>
</html>
