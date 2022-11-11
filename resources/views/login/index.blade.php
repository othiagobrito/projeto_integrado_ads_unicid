@extends('layouts.app')

@section('title') Login @endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login/style.css') }}">
@endsection

@section('content')
    <main class="form-signin text-center">
        <form action="">
            <img src="" alt="">
            
            <h1 class="h3 mb-3 fw-normal">Faça Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
        </form>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/teste.js') }}"></script>
@endsection
