@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Bienvenido al Sistema de Gestión de Ninjas</h2>
        </div>
        <div class="card-body">
            <div class="list-group">
                <a href="{{ route('ninjas.create') }}" class="list-group-item list-group-item-action">Registrar Ninjas</a>
                <a href="{{ route('ninjas.list') }}" class="list-group-item list-group-item-action">Listar Ninjas</a>
                <a href="{{ route('ninjas.stats') }}" class="list-group-item list-group-item-action">Estadísticas de Ninjas</a>
            </div>
        </div>
    </div>
@endsection