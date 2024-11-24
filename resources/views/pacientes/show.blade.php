@extends( 'layouts.app' )
@section( 'content' )
<title>Info del Paciente</title>
    <div class="animated-header text-center my-4">
        <h1 class="text-primary fw-bold">Información del Paciente</h1>
    </div>
    <div class="container mt-4">
        <!-- Botón de regresar -->
        <a href="{{ route('pacientes.index') }}" class="btn btn-success mb-3" style="font-size: 1.1rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            ← Regresar
        </a>

        <!-- Tarjeta con información -->
        <div class="card shadow-lg" style="border-radius: 15px; background-color: #ffffff;">
            <div class="card-header text-white text-center" style="background: linear-gradient(to right, #007bff, #0056b3); border-radius: 15px 15px 0 0;">
                <h5 class="mb-0">Detalles del Paciente</h5>
            </div>
            <div class="card-body" style="color: #333333; font-size: 1.1rem;">
                <p><strong>Nombre:</strong> <span class="text-primary">{{ $paciente->nombre }}</span></p>
                <p><strong>Apellido:</strong> <span class="text-success">{{ $paciente->apellido }}</span></p>
                <p><strong>Edad:</strong> <span class="text-info">{{ $paciente->edad }}</span></p>
                <p><strong>Sexo:</strong> <span class="text-warning">{{ $paciente->sexo }}</span></p>
            </div>
        </div>
    </div>
@endsection
