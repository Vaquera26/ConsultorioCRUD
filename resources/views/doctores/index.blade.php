@extends( 'layouts.app' )
@section( 'content' )
<title>Lista de Doctores</title>
    <div class="animated-header text-center my-4">
        <h1 class="text-primary fw-bold">Lista de Doctores</h1>
    </div>

    <!-- Botón de nuevo doctor -->
    <a href="{{ route('doctores.create') }}" class="btn btn-success mb-3" style="font-size: 1.2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        + Nuevo doctor
    </a>

    <!-- Tabla de doctores -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered shadow-sm" style="background-color: #ffffff; border-radius: 10px; overflow: hidden;">
            <thead style="background: linear-gradient(to right, #007bff, #0056b3); color: white;">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Especialidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctores as $doctor)
                <tr>
                    <td class="align-middle">{{ $doctor->id }}</td>
                    <td class="align-middle">{{ $doctor->nombre }}</td>
                    <td class="align-middle">{{ $doctor->apellido }}</td>
                    <td class="align-middle">{{ $doctor->especialidad }}</td>
                    <td class="align-middle text-center">
                        <form action="{{ route('doctores.destroy', $doctor->id) }}" method="POST" class="d-inline">
                            @csrf
                            <a href="{{ route('doctores.show', $doctor->id) }}" class="btn btn-info btn-sm text-white" style="border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">Mostrar</a>
                            <a href="{{ route('doctores.edit', $doctor->id) }}" class="btn btn-warning btn-sm text-dark" style="border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">Editar</a>
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
        {{ $doctores->links('pagination::bootstrap-4') }}
    </div>
@endsection
