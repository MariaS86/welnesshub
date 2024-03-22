
@extends('layout')
@section('content')
<div class="container mt-4">
    <h2 class="mt-4 text-center">Список категорий советов:</h2>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories_a as $categorya)
            <tr>
                <td>{{$categorya->id}}</td>
                <td>{{$categorya->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
