<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>609-01</title>
        <style> .is-invalid {color: red;} </style>
    </head>
    <body>
        <h2>Редактирование совета</h2>
        {{-- <form method="post" action={{url('advice/update/'.$advice->id)}}/> --}}
            <form method="post" action="{{ url('advice/update/'.$advice->id) }}">
            @csrf
            <label>Название совета:</label>
            <input type="text" name="name" value="@if (old('name')) {{old('name')}} @else {{$advice->name}} @endif" />
            @error('name')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
            <br>
            <br>
            <label>Текст совета:</label>
            <input type="text" name="text" value="@if (old('name')) {{old('text')}} @else{{$advice->text}} @endif "/>
            @error('text')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
            <br>
            <br>
            <label>Категория совета:</label>
            
            <select name="category_id" value="{{ old('category_id') }}">
                <option style="...">
                    @foreach ($categories_a as $categorya)
                    <option value="{{$categorya->id}}"
                        @if(old('category_id'))
                        @if(old('category_id') == $categorya->id) selected @endif
                        @else
                        @if($advice->category_id == $categorya->id) selected @endif
                        @endif>{{$categorya->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="is-invalid">{{ $message }}</div>
                @enderror
                <br>
                {{-- <input type="submit"> --}}
                <input type="submit" value="Submit">
        </form>    
    </body>
</html>
                