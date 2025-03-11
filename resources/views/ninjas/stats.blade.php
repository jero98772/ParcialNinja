@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Estadísticas de Ninjas</h2>
        </div>
        <div class="card-body">
            <div class="mb-4">
                <h3>Distribución por Aldea</h3>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aldea de la Hoja
                        <span class="badge bg-primary rounded-pill">{{ $ninjasHoja }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aldea de la Niebla
                        <span class="badge bg-primary rounded-pill">{{ $ninjasNiebla }}</span>
                    </li>
                </ul>
            </div>
            
            <div class="mb-4">
                <h3>Chakra Total</h3>
                <div class="alert alert-info">
                    El poder total de chakra de todos los ninjas es: <strong>{{ $totalChakra }}</strong>
                </div>
            </div>
            
            <a href="{{ route('ninjas.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@endsection