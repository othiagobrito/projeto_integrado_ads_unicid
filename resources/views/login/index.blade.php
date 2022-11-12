@extends('layouts.app')

@section('title') Login @endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login/style.css') }}">
@endsection

@section('content')
    <main class="form-signin text-center">
        <form action="">
            <img class="img-thumbnail card-img mb-4" src="{{ asset('imgs/logo.png') }}" width="150px" height="150px">
            
            <h1 class="h3 mb-3 fw-normal">Faça Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="conta@gmail.com">
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                <label for="floatingPassword">Senha</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
        </form>
    </main>
@endsection

@section('scripts')

@endsection
