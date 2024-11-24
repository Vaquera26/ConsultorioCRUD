@extends( 'layouts.app' )
@section( 'content' )
<title>Lista de Especialidades</title>
    <div class="animated-header text-center my-4">
        <h1 class="text-primary fw-bold">Lista de Especialidades</h1>
    </div>

    <!-- Botón de nueva especialidad -->
    <a href="{{ route('especialidades.create') }}" class="btn btn-success mb-3" style="font-size: 1.2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        + Nueva especialidad
    </a>

    <!-- Tabla de especialidades -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered shadow-sm" style="background-color: #ffffff; border-radius: 10px; overflow: hidden;">
            <thead style="background: linear-gradient(to right, #007bff, #0056b3); color: white;">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($especialidades as $especialidad)
                <tr>
                    <td class="align-middle">{{ $especialidad->id }}</td>
                    <td class="align-middle">{{ $especialidad->nombre }}</td>
                    <td class="align-middle">{{ $especialidad->descripcion }}</td>
                    <td class="align-middle text-center">
                        <form action="{{ route('especialidades.destroy', $especialidad->id) }}" method="POST" class="d-inline">
                            @csrf
                            <a href="{{ route('especialidades.show', $especialidad->id) }}" class="btn btn-info btn-sm text-white" style="border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">Mostrar</a>
                            <a href="{{ route('especialidades.edit', $especialidad->id) }}" class="btn btn-warning btn-sm text-dark" style="border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">Editar</a>
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Paginación -->
    <div class="d-flex justify-content-center mt-3">
        {{ $especialidades->links('pagination::bootstrap-4') }}
    </div>
@endsection
