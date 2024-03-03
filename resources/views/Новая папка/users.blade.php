<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-01</title>
</head>
<body>
    <h2>{{$user ? "ID пользователя:" .$user->id : 'Неверный ID пользователя'}}</h2>
    @if($user)
    <table border="1">
        <thead>
            <td>id</td>
            <td>Блюдо</td>
            <td>Калорийность на 100 (г)</td>
            <td>Калорийность блюда</td>
            <td>Вес (г)</td>
            <td>Белки</td>
            <td>Жиры</td>
            <td>Углеводы</td>
            
        </thead>
        @php
        $totalProtein = 0;
        $totalFat = 0;
        $totalCarb = 0;
        $totalKkal = 0;
        $DKkal = 0;
        $SKkal = 0;
        $totalWeight = 0;
        @endphp
        @foreach ($user->products as $product)
        <tr>
            @php
            $DKkal += ($product->kkal * $product->pivot->weight / 100); 
            @endphp
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->kkal}}</td>
            <td>{{$DKkal}}</td>
            <td>{{$product->pivot->weight }}</td>
            <td>{{$product->protein}}</td>
            <td>{{$product->fat}}</td>
            <td>{{$product->carb}}</td>   
        </tr>
        @php
        $totalProtein += $product->protein;
        $totalFat += $product->fat;
        $totalCarb += $product->carb;
        $SKkal += $product->kkal; 
        $totalKkal += $DKkal;
        $totalWeight += $product->pivot->weight;
        @endphp
        @endforeach
        <tr>
            <td colspan="2">Итого</td>
            <td><strong> {{ $SKkal }}</strong></td>
            <td><strong> {{ $totalKkal }}</strong></td>
            <td><strong> {{ $totalWeight }}</strong></td>
            <td><strong> {{ $totalProtein }}</strong></td>
            <td><strong> {{ $totalFat }}</strong></td>
            <td><strong> {{ $totalCarb }}</strong></td>
        </tr>
    </table>
    @endif
</body>
</html>