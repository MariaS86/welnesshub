
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>609-01</title>
        <style> .is-invalid {color: red;} </style>
    </head>
    <body>
        <h2>Добавление совета</h2>
            <form method="post" action="{{ url('advice') }}">
            @csrf
            <label>Название совета:</label>
            <input type="text" name="name" value="{{old('name')}}" />
            @error('name')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
            <br>
            <br>
            <label>Текст совета:</label>
            <input type="text" name="text" value="{{old('text')}}"/>
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
                        @if(old('category_id') == $categorya->id) selected 
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
                                