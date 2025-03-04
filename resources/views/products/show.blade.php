<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portátil Gaming - UNAB</title>
    <!-- Carga de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #fc9928; /* Naranja UNAB */
        }
        .navbar a {
            color: white !important;
        }
        .navbar a:hover {
            color: #6A4C9C; /* Morado UNAB */
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
            background-color: #fc9928; /* Naranja UNAB */
            color: white;
        }
        footer a {
            color: white;
        }
        .precio {
            font-size: 24px;
            color: #b12704; /* Color típico de precios en Amazon */
            font-weight: bold;
        }
        /* Ajuste de tamaño de la imagen */
        .producto-img {
            max-width: 100%; /* Se adapta al tamaño del contenedor */
            height: 380px; /* Imagen un poco más pequeña */
            object-fit: contain; /* Mantiene la proporción sin recortar */
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
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección del Producto -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <!-- Imagen del producto -->
            <div class="col-md-6 text-center">
                <img src="https://www.professionalwireless.com.co/wp-content/uploads/2024/11/ROG-STRIX-G614JV-AS74_4.png" class="img-fluid producto-img" alt="Portátil Gaming">
            </div>

            <!-- Descripción del producto -->
            <div class="col-md-6">
                <h2>Portátil Gaming ASUS ROG Strix G16</h2>
                <p class="text-muted">Marca: <strong>ASUS</strong></p>
                <p class="precio">$9.199.900</p>
                <p>
                    El ASUS ROG Strix G16 es un portátil gaming de alto rendimiento diseñado para jugadores exigentes. Con una pantalla de 16 pulgadas y una frecuencia de actualización de 165 Hz, disfrutarás de una experiencia fluida y envolvente.
                </p>
                <ul>
                    <li>Procesador Intel Core i7-13650HX</li>
                    <li>Tarjeta gráfica NVIDIA GeForce RTX 4060 8GB</li>
                    <li>16GB RAM DDR5 y 512GB SSD NVMe</li>
                    <li>Pantalla Full HD 165Hz</li>
                    <li>Teclado RGB personalizable</li>
                </ul>
                <button class="btn btn-warning">Agregar al carrito</button>
                <button class="btn btn-primary ms-2">Comprar ahora</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-4 text-center mt-5">
        <p>&copy; 2025 Universidad Autónoma de Bucaramanga. Todos los derechos reservados.</p>
        <a href="#">Aviso de privacidad</a>
    </footer>

    <!-- Carga de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
