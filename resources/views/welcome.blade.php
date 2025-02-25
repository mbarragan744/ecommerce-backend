<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Promociones - UNAB</title>
    <!-- Carga de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #ff8533; /* Naranja UNAB */
        }
        .navbar a {
            color: white !important;
        }
        .navbar a:hover {
            color: #6A4C9C; /* Morado UNAB */
        }
        .promo-card {
            margin: 15px;
        }
        .header-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .btn-primary {
            background-color: #6A4C9C; /* Morado UNAB */
            border-color: #6A4C9C;
        }
        .btn-primary:hover {
            background-color: #5c43a0; /* Morado más oscuro */
            border-color: #5c43a0;
        }
        footer {
            background-color: #FF6600; /* Naranja UNAB */
            color: white;
        }
        footer a {
            color: white;
        }
        
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm7hzhCG-M6xpRWhY7dr0poid_mB6i1MZNEg&s" alt="Logo UNAB" height="80px">
            </a>
            <!-- Botón de toggle para móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Enlaces de navegación -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de Promociones -->
    <div class="container mt-5">
        <h2 class="text-center mb-4" style="color: #ff9046;">Promociones Disponibles</h2>
        <div class="row">
            <!-- Promoción 1 -->
            <div class="col-md-4">
                <div class="card promo-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcThKY1JLNxDcC5Lv9EzaP3QSU9bTGGzJMLQ&s" class="card-img-top header-img" alt="Promoción 1">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #f1833a;">Descuento en Inscripción</h5>
                        <p class="card-text">Obtén un 50% de descuento en tu inscripción si te registras antes del 31 de marzo.</p>
                        <a href="#" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <!-- Promoción 2 -->
            <div class="col-md-4">
                <div class="card promo-card">
                    <img src="https://unab.edu.co/wp-content/uploads/2022/05/boton-becas-economicas.jpg" class="card-img-top header-img" alt="Promoción 2">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #FF6600;">Beca Parcial</h5>
                        <p class="card-text">Aprovecha las becas parciales para estudiantes de primer ingreso. Aplica ya.</p>
                        <a href="#" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <!-- Promoción 3 -->
            <div class="col-md-4">
                <div class="card promo-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ65MDr7fTHK6rVOcr_HDypEYZ4dx9vgF_gkA&s" class="card-img-top header-img" alt="Promoción 3">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #FF6600;">Descuentos en Material Académico</h5>
                        <p class="card-text">Aprovecha descuentos exclusivos en libros y material académico durante el primer semestre.</p>
                        <a href="#" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-4 text-center">
        <p>&copy; 2025 Universidad Autónoma de Bucaramanga. Todos los derechos reservados.</p>
        <a href="#">Aviso de privacidad</a>
    </footer>

    <!-- Carga de Bootstrap JS (sin JS personalizado) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybO0vsq+W+jK9jIJ3lF2v6kK1kOACD5D4e1jpZs6ttk1kC3n2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0L91Uaj7T1ntg+1bvn8vjjXomRAdW2VGo+0M9M8YkQAkD3M/" crossorigin="anonymous"></script>

</body>
</html>
