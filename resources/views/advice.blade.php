@extends('layout')
@section('content')
    <h2 class="mt-5 text-center">Список советов</h2>
    <div class="table-responsive mt-3">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th>Текст</th>
                    <th>Категория</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($advices as $advice)
                <tr>
                    <td>{{$advice->id}}</td>
                    <td>{{$advice->name}}</td>
                    <td>{{$advice->text}}</td>
                    <td>{{$advice->categorya->name }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Действия">
                            <a href="{{url('advice/destroy/'.$advice->id)}}" class="btn btn-danger">Удалить</a>
                            <a href="{{url('advice/edit/'.$advice->id)}}" class="btn btn-primary">Редактировать</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $advices->links() }}
@endsection