@extends('layouts.app')

@section('title') Home @endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/general/style.css') }}">
@endsection

@section('content')
    <main class="m-auto">
        <div class="card-group">
            <div class="card">
                <a href="" class="nav-link">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('imgs/person-fill-add.svg') }}" class="card-img-top" width="150px" height="150px">
                        
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar Funcionário</h5>
                            <p class="card-text">Formulário para cadastrar novos funcionários da clínica.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="card">
                <a href="" class="nav-link">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('imgs/plus-circle-fill.svg') }}" class="card-img-top" width="150px" height="150px">
                        
                        <div class="card-body">
                            <h5 class="card-title">Agendar atendimento</h5>
                            <p class="card-text">Formulário de agendamento de atendimento.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="card-group">
            <div class="card">
                <a href="" class="nav-link">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('imgs/person-fill-add.svg') }}" class="card-img-top" width="150px" height="150px">
                        
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar Cliente</h5>
                            <p class="card-text">Formulário de cadastro de clientes da clínica.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="card">
                <a href="" class="nav-link">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('imgs/building-fill.svg') }}" class="card-img-top" width="150px" height="150px">
                        
                        <div class="card-body">
                            <h5 class="card-title">Dashboard</h5>
                            <p class="card-text">Todos os dados financeiros da clínica.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    
@endsection
