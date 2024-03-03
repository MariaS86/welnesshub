<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-01</title>
</head>
<body>
    <h2>Список советов</h2>
    <table border="1">
        <thead>
            <td>id</td>
            <td>Название</td>
            <td>Текст</td>
            <td>Категория</td>
        </thead>
        @foreach ($advice as $advice)
        <tr>
            <td>{{$advice->id}}</td>
            <td>{{$advice->name}}</td>
            <td>{{$advice->text}}</td>
            <td>{{$advice->categorya->name }}</td>
            <td>
                <a href="{{url('advice/destroy/'.$advice->id)}}">Удалить</a>
                <a href="{{url('advice/edit/'.$advice->id)}}">Редактировать</a>          
            </td>
        </tr>
    @endforeach
    </table>
    {{-- @endif --}}
</body>
</html>