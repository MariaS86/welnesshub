@extends('layout')
@section('content')

<div class="container mt-4">


    <h2 class="mt-4 text-center">Редактирование совета</h2>

    <form method="post" action="{{ url('advice/update/'.$advice->id) }}" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="name">Название совета:</label>
            <input type="text" class="form-control" name="name" value="@if (old('name')) {{old('name')}} @else {{$advice->name}} @endif" />
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="text">Текст совета:</label>
            <input type="text" class="form-control" name="text" value="@if (old('text')) {{old('text')}} @else {{$advice->text}} @endif" />
            @error('text')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">Категория совета:</label>
            <select class="form-control" name="category_id">
                @foreach ($categories_a as $categorya)
                <option value="{{ $categorya->id }}" @if(old('category_id') == $categorya->id || $advice->category_id == $categorya->id) selected @endif>{{ $categorya->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>
</div>
@endsection