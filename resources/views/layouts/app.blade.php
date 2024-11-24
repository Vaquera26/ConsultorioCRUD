<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #14121C;
            color: #f8f9fa;
            padding: 20px 0;
            background: linear-gradient(to right, #007bff, #0056b3); border-radius: 15px 15px 0 0;
        }

        footer .icon {
            font-size: 1.5rem;
            color: #ffc107;
            margin-right: 10px;
        }

        footer a {
            color: #ffc107;
            text-decoration: none;
            transition: color 0.2s ease-in-out;
        }

        footer a:hover {
            color: #ffffff;
        }

        footer .section-title {
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        footer .contact-item {
            margin-bottom: 10px;
        }

        footer i {
            margin-right: 8px;
        }
    </style>
</head>
<body class="bg-white text-white">

    <!-- Header -->
    <header class="text-center" >
        <nav class="navbar navbar-expand-lg navbar-dark " style="background: linear-gradient(to right, #007bff, #0056b3); ">
            <div class="container">
                <a  class="text-white navbar-brand" href="{{ url('/') }}"><strong>Hospital +</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <!-- Contenido -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Contacto -->
                <div class="col-md-4">
                    <h5 class="section-title">Contacto</h5>
                    <p class="contact-item">
                        <i class="bi bi-telephone"></i> Teléfono: +52 871 123 4567
                    </p>
                    <p class="contact-item">
                        <i class="bi bi-envelope"></i> Email: contacto@hospitalplus.com
                    </p>
                    <p class="contact-item">
                        <i class="bi bi-geo-alt"></i> Dirección: Av. Salud #123, Torreón, Coahuila
                    </p>
                </div>

                <!-- Enlaces útiles -->
                <div class="col-md-4">
                    <h5 class="section-title">Enlaces útiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="bi bi-info-circle"></i> Acerca de nosotros</a></li>
                        <li><a href="#"><i class="bi bi-heart"></i> Servicios médicos</a></li>
                        <li><a href="#"><i class="bi bi-people"></i> Equipo médico</a></li>
                        <li><a href="#"><i class="bi bi-shield-check"></i> Políticas y privacidad</a></li>
                    </ul>
                </div>

                <!-- Redes sociales -->
                <div class="col-md-4">
                    <h5 class="section-title">Síguenos</h5>
                    <a href="#" class="me-2"><i class="bi bi-facebook icon"></i></a>
                    <a href="#" class="me-2"><i class="bi bi-twitter icon"></i></a>
                    <a href="#" class="me-2"><i class="bi bi-instagram icon"></i></a>
                    <a href="#" class="me-2"><i class="bi bi-linkedin icon"></i></a>
                </div>
            </div>
            <div class="text-center mt-4">
                <small>&copy; 2024 Hospital +. Todos los derechos reservados.</small>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>
