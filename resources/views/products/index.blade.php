<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos - UNAB</title>
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
            font-size: 20px;
            color: #b12704; /* Color de precio estilo Amazon */
            font-weight: bold;
        }
        .card img {
            height: 220px; /* Tamaño uniforme para todas las imágenes */
            object-fit: contain; /* Mantiene proporción sin recortar */
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

    <!-- Listado de Productos -->
    <div class="container mt-5">
        <h2 class="text-center mb-4" style="color: #ff6600;">Productos Disponibles</h2>
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://www.professionalwireless.com.co/wp-content/uploads/2024/11/ROG-STRIX-G614JV-AS74_4.png" class="card-img-top" alt="Laptop ASUS">
                    <div class="card-body">
                        <h5 class="card-title">Laptop ASUS ROG Strix</h5>
                        <p class="precio">$1,499.99</p>
                        <p class="card-text">Portátil gaming con procesador Intel i7 y tarjeta gráfica RTX 4060.</p>
                        <a href="#" class="btn btn-warning w-100">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://m.media-amazon.com/images/I/71RD3vsjIYL._AC_SY450_.jpg" class="card-img-top" alt="MacBook Air">
                    <div class="card-body">
                        <h5 class="card-title">MacBook Air M2</h5>
                        <p class="precio">$1,199.99</p>
                        <p class="card-text">Pantalla Retina de 13.6", Chip M2 y batería de larga duración.</p>
                        <a href="#" class="btn btn-warning w-100">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://m.media-amazon.com/images/I/81bc8mA3nKL._AC_SY450_.jpg" class="card-img-top" alt="HP Pavilion">
                    <div class="card-body">
                        <h5 class="card-title">HP Pavilion 15</h5>
                        <p class="precio">$899.99</p>
                        <p class="card-text">Portátil de alto rendimiento con Intel i5 y pantalla Full HD.</p>
                        <a href="#" class="btn btn-warning w-100">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://m.media-amazon.com/images/I/81o2W1xNpzL._AC_SL1500_.jpg" class="card-img-top" alt="Dell XPS 13">
                    <div class="card-body">
                        <h5 class="card-title">Dell XPS 13</h5>
                        <p class="precio">$1,299.99</p>
                        <p class="card-text">Ultrabook con pantalla InfinityEdge y procesador Intel Evo.</p>
                        <a href="#" class="btn btn-warning w-100">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBQQ2tEop88QE0kTK81I5CoJby8jHf-JccRw&s" class="card-img-top" alt="Lenovo Legion 5">
                    <div class="card-body">
                        <h5 class="card-title">Lenovo Legion 5</h5>
                        <p class="precio">$1,099.99</p>
                        <p class="card-text">Laptop gaming con AMD Ryzen 7 y RTX 3070.</p>
                        <a href="#" class="btn btn-warning w-100">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrEOuQ666NFn3WMzO8O5AFZJuKu_05vBY0xg&s" class="card-img-top" alt="Acer Nitro 5">
                    <div class="card-body">
                        <h5 class="card-title">Acer Nitro 5</h5>
                        <p class="precio">$999.99</p>
                        <p class="card-text">Laptop gaming con Intel i5 de 12ª gen y RTX 3050.</p>
                        <a href="#" class="btn btn-warning w-100">Agregar al carrito</a>
                    </div>
                </div>
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
