@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Listado de Ninjas</h2>
        </div>
        <div class="card-body">
            @if($ninjas->count() > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Aldea</th>
                            <th>Chakra</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ninjas as $ninja)
                            <tr>
                                <td>{{ $ninja->id }}</td>
                                <td>{{ $ninja->nombre }}</td>
                                <td>{{ $ninja->aldea }}</td>
                                <td>
                                    @if($ninja->aldea == 'Hoja')
                                        <span style="color: red;">{{ $ninja->chakra }}</span>
                                    @else
                                        <span style="color: blue;">{{ $ninja->chakra }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-info">No hay ninjas registrados aún.</div>
            @endif
            
            <a href="{{ route('ninjas.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@endsection