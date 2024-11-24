@extends( 'layouts.app' )
@section( 'content' )
<title>Agregar Especialidad</title>
    <div class="animated-header text-center my-4">
        <h1 class="text-primary fw-bold">Agregar Especialidad</h1>
    </div>
    <div class="container mt-4">
        <!-- Botón de regresar -->
        <a href="{{ route('especialidades.index') }}" class="btn btn-success mb-3" style="font-size: 1.1rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            ← Regresar
        </a>

        <!-- Formulario -->
        <form id="miFormulario" action="{{ route('especialidades.store') }}" method="POST" class="shadow-lg p-4" style="background-color: #ffffff; border-radius: 15px;">
            @csrf

            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold text-secondary">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa el nombre" style="border-radius: 10px; border: 1px solid #ced4da;">
            </div>

            <!-- Descripción -->
            <div class="mb-3">
                <label for="descripcion" class="form-label fw-bold text-secondary">Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Ingresa la descripción" style="border-radius: 10px; border: 1px solid #ced4da;">
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
