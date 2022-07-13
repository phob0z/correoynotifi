@extends('layouts.app')

@section('content')
    <div class="container mt-5 col-12 col-sm-6">
        <p class="text text-center h2">Formulario de quejas, novedades o sugerencias</p>
        <form method="POST" action="{{ route('sugerencias.form') }}">
            @csrf
            <div class="mb-3">
                <label for="data1" class="form-label">Nombre</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="data1" name="nombre"
                    value="{{ old('nombre') }}">
                <div class="form-text">Ingrese un nombre válido.</div>
                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="data2" class="form-label">Apellido</label>
                <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="data2"
                    name="apellido" value="{{ old('apellido') }}">
                <div class="form-text">Ingrese un nombre válido.</div>
                @error('apellido')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="data3" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control @error('correo') is-invalid @enderror" id="data3"
                    name="correo" value="{{ old('correo') }}">
                <div class="form-text">Ingrese un correo válido.</div>
                @error('correo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="data4" class="form-label">Asunto</label>
                <input type="asunto" class="form-control @error('asunto') is-invalid @enderror" id="data4"
                    name="asunto" value="{{ old('asunto') }}">
                <div class="form-text">Ingrese un asunto para procesar</div>
                @error('asunto')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <textarea class="form-control @error('mensaje') is-invalid @enderror" name="mensaje" placeholder="Leave a comment here"
                    value="{{ old('mensaje') }}"></textarea>
                <label for="floatingTextarea">Ingrese detalladamente su queja, novedad o sugerencia </label>
                <div id="emailHelp" class="form-text">Ingrese la información</div>
                @error('mensaje')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
        </form>
    </div>
@endsection
