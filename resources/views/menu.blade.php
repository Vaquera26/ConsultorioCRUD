@extends( 'layouts.app' )
@section( 'content' )
    <title>FSINICIOAD24</title>
    <style>
        /* Imagen de fondo */
        .background-image {
            background: url('https://saludencamino.com/wp-content/uploads/2021/05/7-Preguntas-para-hacerle-a-un-nuevo-medico-.jpg') no-repeat center center/cover;
            min-height: 60vh;
            padding-top: 80px;
            color: white;
        }

        /* Estilo de los enlaces */
        .list-group a {
            backdrop-filter: blur(5px);
            background-color: rgba(0, 123, 255, 0.7);
            transition: transform 0.2s ease, color 0.2s ease, background-color 0.2s ease;
            color: white; /* Color inicial */
            text-decoration: none;
        }

        .list-group a:hover {
            transform: scale(1.05);
            background-color: rgba(255, 255, 255, 0.9); /* Cambia el fondo a blanco */
            color: #007bff; /* Letras azules para contraste */
        }
    </style>

    <div class="background-image text-center">
  
        <div class="container mt-4">
            <div class="list-group shadow-lg" style="border-radius: 15px; overflow: hidden; max-width: 600px; margin: auto;">
                <a href="{{ route('medicinas.index') }}" class="list-group-item list-group-item-action">
                    <strong>Medicinas</strong>
                </a>
                <a href="{{ route('doctores.index') }}" class="list-group-item list-group-item-action">
                    <strong>Doctores</strong>
                </a>
                <a href="{{ route('especialidades.index') }}" class="list-group-item list-group-item-action">
                    <strong>Especialidades</strong>
                </a>
                <a href="{{ route('pacientes.index') }}" class="list-group-item list-group-item-action">
                    <strong>Pacientes</strong>
                </a>
            </div>
        </div>
    </div>
@endsection
