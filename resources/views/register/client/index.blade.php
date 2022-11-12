@extends('layouts.app')

@section('title') Cadastro de Cliente @endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/general/style.css') }}">
@endsection

@section('content')
    <main class="m-auto">

        <div class="text-center mb-lg-5">
            <h1>Cadastrar Cliente</h1>
        </div>

        <form class="row g-3">
            <div class="col-12">
                <label for="inputAddress" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>

            <div class="col-md-8">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="col-md-4">
                <label for="inputPhone" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="inputPhone">
            </div>

            <div class="col-md-8">
                <label for="inputAddress" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>

            <div class="col-md-2">
                <label for="inputNumber" class="form-label">Número</label>
                <input type="text" class="form-control" id="inputNumber">
            </div>

            <div class="col-md-2">
                <label for="inputZip" class="form-label">CEP</label>
                <input type="text" class="form-control" id="inputZip">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary form-control">Cadastrar</button>
            </div>
        </form>
    </main>
@endsection

@section('scripts')
    
@endsection
