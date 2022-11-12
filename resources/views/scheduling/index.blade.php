@extends('layouts.app')

@section('title') Agendamento @endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/general/style.css') }}">
@endsection

@section('content')
    <main class="m-auto">
        <div class="text-center mb-lg-5">
            <h1>Agendamento de Serviço</h1>
        </div>

        <form class="row g-3">
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Email do cliente</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="col-12">
                <label for="inputState" class="form-label">Serviço</label>

                <select id="inputState" class="form-select">
                    <option selected>Escolha...</option>
                    <option>Toxina Botulínica</option>
                    <option>Preenchimento Facial</option>
                    <option>Bichectomia</option>
                    <option>Preenchimento Labial</option>
                    <option>Skinbooster</option>
                    <option>Skinbooster</option>
                    <option>Peeling Químico</option>
                    <option>Microagulhamento</option>
                </select>
            </div>

            <div class="col-12">
                <label for="inputDate" class="form-label">Data</label>
                <input type="datetime-local" min="{{ now()->addDay()->format('Y-m-d 10:00') }}" value="{{ now()->addDay()->format('Y-m-d 10:00') }}" class="form-control" id="inputDate">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary form-control">Agendar</button>
            </div>
        </form>
    </main>
@endsection

@section('scripts')
    
@endsection
