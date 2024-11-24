@extends( 'layouts.app' )
@section( 'content' )
    <div class="animated-header text-center my-4">
        <h1 class="text-primary fw-bold">Lista de Medicinas</h1>
    </div>
    <a href="{{ route( 'medicinas.create' ) }}" class="btn btn-success mb-3" style="font-size: 1.2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        + Nueva medicina
    </a>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered shadow-sm" style="background-color: #ffffff; border-radius: 10px; overflow: hidden;">
            <thead style="background: linear-gradient(to right, #007bff, #0056b3); color: white;">
                <tr>
                    <th>ID</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $medicinas as $medicina )
                <tr>
                    <td class="align-middle">{{ $medicina->MEDICINAS_ID }}</td>
                    <td class="align-middle">{{ $medicina->CLAVE }}</td>
                    <td class="align-middle">{{ $medicina->NOMBRE }}</td>
                    <td class="align-middle">${{ number_format($medicina->PRECIO, 2) }}</td>
                    <td class="align-middle text-center">
                        <form action="{{ route('medicinas.destroy', $medicina->MEDICINAS_ID) }}" method="POST" class="d-inline">
                            @csrf
                            <a href="{{ route('medicinas.show', $medicina->MEDICINAS_ID) }}" class="btn btn-info btn-sm text-white" style="border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">Mostrar</a>
                            <a href="{{ route('medicinas.edit', $medicina->MEDICINAS_ID) }}" class="btn btn-warning btn-sm text-dark" style="border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">Editar</a>
                            @method( 'DELETE' )
                            <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $medicinas->links('pagination::bootstrap-4') }}
    </div>
@endsection
