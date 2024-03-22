
    @extends('layout')
    @section('content')
    <div class="container mt-4">
        <h2 class="mt-4 text-center">Добавление совета</h2>
        <form method="post" action="{{ url('advice') }}">
            @csrf
            <div class="form-group">
                <label for="name">Название совета:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="nameHelp" value="{{old('name')}}" />
                <small id="nameHelp" class="form-text text-muted">Введите название совета (макс. 100 символов)</small>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="text">Текст совета:</label>
                <input type="text" class="form-control @error('text') is-invalid @enderror" id="text" name="text" aria-describedby="textHelp" value="{{old('text')}}" />
                <small id="textHelp" class="form-text text-muted">Введите текст совета (макс. 100 символов)</small>
                @error('text')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category">Категория совета:</label>
                <select class="form-control" id="category" name="category_id" aria-describedby="categoryHelp">
                    <option value="">Выберите категорию</option>
                    @foreach ($categories_a as $categorya)
                        <option value="{{$categorya->id}}" @if(old('category_id') == $categorya->id) selected @endif>{{$categorya->name}}</option>
                    @endforeach
                </select>
                <small id="categoryHelp" class="form-text text-muted">Выберите категорию совета</small>
                @error('category_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
            </form>
    </div>
    @endsection
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
