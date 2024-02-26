<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>609-01</title>
    </head>
    <body>
        <h2>Список категорий советов:</h2>
        <table border="1">
            <thead>
                <td>id</td>
                <td>Название</td>
            </thead>
            @foreach ($categories_a as $categorya)
            <tr>
                <td>{{$categorya->id}}</td>
                <td>{{$categorya->name}}</td>
            </tr>
            @endforeach
        </table>
        
    </body>
</html>
                