
        <style>

.form-background {
    background-color: darkgray;
    border-radius: 10px;
    padding: 5%;
    margin: 5% auto; 
    width: 60%;
    display: flex;
    justify-content: center;
    align-items: center;
}
        </style>
         @extends('layout')
         @section('content')
        @if(!Auth::user())
        <div class="container mt-4" style="padding: 10%;">
        <h2 style="text-align: center; color:darkgray">Авторизация</h2>
        <div class="form-background">
        <form class="d-flex" method="post" action={{url('auth')}}>
        @csrf
        
        <div style="text-align: center;">
        <input class="form-control me-2" type="text" placeholder="Логин" name="email" aria-label="Логин"
        value="{{old('email')}}"/>
        </div>
        <br>
        <div style="text-align: center;">
        <input class="form-control me-2" type="password" placeholder="Пароль" name="password" aria-label="Пароль"
        value="{{old('password')}}"/>
        </div>
        <br>
        <div style="text-align: center;">
        <button class="btn btn-outline-success" type="submit">Войти</button> 
        </div>       
        </form>
        </div>
    </div>
        @else
        <style>

.logout {
    background-color: gainsboro;
    border-radius: 10px;
    padding: 5%;
    margin: 10% auto; /* Отступ 50% сверху и снизу */
    width: 25%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
            
                    </style>
        <ul class="navbar-nav">
            <div class="logout">
            <a class="nav-link active" href="/login">
                <i class="fa fa-user" style="font-size:20px;colour:white;"></i>
                <span>Здравствуйте,</span>{{Auth::user()->name}}</a> 
                {{-- <h2>Здравствуйте,{{Auth::user()->name}}</h2> --}}
                <a class="btn btn-outline-success my-2 my-sm-0" href="{{url('logout')}}">Выйти</a>
            </div>
        </ul>
        @endif
        @endsection 
        