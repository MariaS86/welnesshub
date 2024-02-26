<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>609-01</title>
    </head>
    <body>
        <h2>Список советов:</h2>
       
        <table border="1">
            <thead>
                <td>id совета</td>
                <td>Название</td>
                <td>Текст</td>
                <td>id категории</td>
            </thead>
            
            @foreach ($category as $categorya)
            @if($categorya->category_id == 1)
            <tr>
                <td>{{$categorya->id}}</td>
                <td>{{$categorya->name}}</td>
                <td>{{$categorya->text}}</td>
                <td>{{$categorya->category_id}}</td>
            </tr>
            @endif
            @endforeach
        </table>
        
    </body>
</html>
                

