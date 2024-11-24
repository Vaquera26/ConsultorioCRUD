@extends( 'layouts.app' )
@section( 'content' )
<title>Info de la Medicina</title>
    <div class="animated-header text-center my-4">
        <h1 class="text-primary fw-bold">Información de la Medicina</h1>
    </div>
    <div class="container mt-4">
        <a href="{{ route('medicinas.index') }}" class="btn btn-success mb-3" style="font-size: 1.1rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            ← Regresar
        </a>
        <div class="card shadow-lg" style="border-radius: 15px; background-color: #ffffff;">
            <div class="card-header text-white text-center" style="background: linear-gradient(to right, #007bff, #0056b3); border-radius: 15px 15px 0 0;">
                <h5 class="mb-0">Detalles de la Medicina</h5>
            </div>
            <div class="card-body" style="color: #333333; font-size: 1.1rem;">
                <p><strong>Clave:</strong> <span class="text-primary">{{ $medicina->CLAVE }}</span></p>
                <p><strong>Nombre:</strong> <span class="text-success">{{ $medicina->NOMBRE }}</span></p>
                <p><strong>Precio:</strong> <span class="text-danger">${{ number_format($medicina->PRECIO, 2) }}</span></p>
            </div>
        </div>
    </div>
@endsection
