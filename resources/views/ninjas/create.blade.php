@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Registrar Nuevo Ninja</h2>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('ninjas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                           id="nombre" name="nombre" value="{{ old('nombre') }}">
                    @error('nombre')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="aldea" class="form-label">Aldea</label>
                    <select class="form-select @error('aldea') is-invalid @enderror" 
                            id="aldea" name="aldea">
                        <option value="">Seleccione una aldea</option>
                        <option value="Hoja" {{ old('aldea') == 'Hoja' ? 'selected' : '' }}>Hoja</option>
                        <option value="Niebla" {{ old('aldea') == 'Niebla' ? 'selected' : '' }}>Niebla</option>
                    </select>
                    @error('aldea')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="chakra" class="form-label">Chakra</label>
                    <input type="number" class="form-control @error('chakra') is-invalid @enderror" 
                           id="chakra" name="chakra" value="{{ old('chakra') }}">
                    @error('chakra')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Registrar Ninja</button>
                <a href="{{ route('ninjas.index') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
@endsection