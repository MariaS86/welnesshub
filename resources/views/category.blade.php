@extends('layout')
@section('content')
<div class="container mt-4">
    <h2 class="mt-4 text-center">{{ $category ? "Список советов" : 'Неверный ID совета' }}</h2>
    @if($category)
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>id совета</th>
                    <th>Название</th>
                    <th>Текст</th>
                    <th>id категории</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $categorya)
                <tr>
                    <td>{{ $categorya->id }}</td>
                    <td>{{ $categorya->name }}</td>
                    <td>{{ $categorya->text }}</td>
                    <td>{{ $categorya->category_id }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection