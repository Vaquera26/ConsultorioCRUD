@extends( 'layouts.app' )
@section( 'content' )
<title>Editar Medicina</title>
    <div class="animated-header text-center my-4">
        <h1 class="text-primary fw-bold">Editar Medicina</h1>
    </div>
    <div class="container mt-4">

            <!-- Botón de regresar -->
            <a href="{{ route('doctores.index') }}" class="btn btn-success mb-3" style="font-size: 1.1rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            ← Regresar
        </a>
        <form id="miFormulario" action="{{ route('medicinas.update', $medicina->MEDICINAS_ID) }}" method="POST" class="shadow-lg p-4" style="background-color: #ffffff; border-radius: 15px;">
            @csrf
            @method('PUT')

            <!-- Clave -->
            <div class="mb-3">
                <label for="clave" class="form-label fw-bold text-secondary">Clave:</label>
                <input type="text" id="clave" name="clave" class="form-control" value="{{ $medicina->CLAVE }}" style="border-radius: 10px; border: 1px solid #ced4da;">
            </div>

            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold text-secondary">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $medicina->NOMBRE }}" style="border-radius: 10px; border: 1px solid #ced4da;">
            </div>

            <!-- Precio -->
            <div class="mb-3">
                <label for="precio" class="form-label fw-bold text-secondary">Precio:</label>
                <input type="text" id="precio" name="precio" class="form-control" value="{{ $medicina->PRECIO }}" style="border-radius: 10px; border: 1px solid #ced4da;">
            </div>

            <!-- Botones -->
            <div class="d-flex justify-content-end">
                <a href="{{ route('medicinas.index') }}" class="btn btn-light me-2" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">Cancelar</a>
                <button type="submit" class="btn btn-success" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">Guardar</button>
            </div>
        </form>
    </div>
@endsection
