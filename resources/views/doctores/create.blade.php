@extends( 'layouts.app' )
@section( 'content' )
<title>Agregar Doctor</title>
    <div class="animated-header text-center my-4">
        <h1 class="text-primary fw-bold">Agregar Doctor</h1>
    </div>
    <div class="container mt-4">
        <!-- Botón de regresar -->
        <a href="{{ route('doctores.index') }}" class="btn btn-success mb-3" style="font-size: 1.1rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            ← Regresar
        </a>

        <!-- Formulario -->
        <form id="miFormulario" action="{{ route('doctores.store') }}" method="POST" class="shadow-lg p-4" style="background-color: #ffffff; border-radius: 15px;">
            @csrf

            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold text-secondary">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa el nombre" style="border-radius: 10px; border: 1px solid #ced4da;">
            </div>

            <!-- Apellido -->
            <div class="mb-3">
                <label for="apellido" class="form-label fw-bold text-secondary">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Ingresa el apellido" style="border-radius: 10px; border: 1px solid #ced4da;">
            </div>

            <!-- Especialidad -->
            <div class="mb-3">
                <label for="especialidad" class="form-label fw-bold text-secondary">Especialidad:</label>
                <input type="text" id="especialidad" name="especialidad" class="form-control" placeholder="Ingresa la especialidad" style="border-radius: 10px; border: 1px solid #ced4da;">
            </div>

            <!-- Botones -->
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-light me-2" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    Limpiar
                </button>
                <button type="submit" class="btn btn-success" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    Guardar
                </button>
            </div>
        </form>
    </div>
@endsection
