@extends('layout')
@section('content')
<div class="container mt-4" style="padding: 10%;">
    <h2 class="text-center">{{ $user ? "ID пользователя:" . $user->id : 'Неверный ID пользователя' }}</h2>
    @if($user)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Блюдо</th>
                <th>Калорийность на 100 (г)</th>
                <th>Калорийность блюда</th>
                <th>Вес (г)</th>
                <th>Белки</th>
                <th>Жиры</th>
                <th>Углеводы</th>
            </tr>
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
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->kkal }}</td>
            <td>{{ $DKkal }}</td>
            <td>{{ $product->pivot->weight }}</td>
            <td>{{ $product->protein }}</td>
            <td>{{ $product->fat }}</td>
            <td>{{ $product->carb }}</td>
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
            <td colspan="2"><strong>Итого</strong></td>
            <td><strong>{{ $SKkal }}</strong></td>
            <td><strong>{{ $totalKkal }}</strong></td>
            <td><strong>{{ $totalWeight }}</strong></td>
            <td><strong>{{ $totalProtein }}</strong></td>
            <td><strong>{{ $totalFat }}</strong></td>
            <td><strong>{{ $totalCarb }}</strong></td>
        </tr>
    </table>
    @endif
</div>
@endsection