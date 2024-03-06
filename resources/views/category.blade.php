
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-01</title>
</head>
<body>
<h2>{{$category ? "Список советов": 'Неверный ID заказа' }}</h2>
@if($category)
    <table border="1">
        <thead>
                <td>id совета</td>
                <td>Название</td>
                <td>Текст</td>
                <td>id категории</td>
                </thead>
                    @foreach ($category as $categorya)
                    <tr>
                        <td>{{$categorya->id}}</td>
                        <td>{{$categorya->name}}</td>
                        <td>{{$categorya->text}}</td>
                        <td>{{$categorya->category_id}}</td>
                    </tr>
        @endforeach
    </table>
    @endif
</body>
</html>
{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-01</title>
</head>
<body>
<h2>{{$category ? "Список советов": 'Неверный ID заказа' }}</h2>
@if($category)
    <table border="1">
        <thead>
            <td>id совета</td>
            <td>Название</td>
            <td>Текст</td>
            <td>id категории</td>
        </thead>
        @foreach ($category->advices as $advice)
            <tr>
                <td>{{$advice->id}}</td>
                <td>{{$advice->name}}</td>
                <td>{{$advice->text}}</td>
                <td>{{$advice->category_id}}</td>
            </tr>
        @endforeach
    </table>
@endif
</body>
</html> --}}