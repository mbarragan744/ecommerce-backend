<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Producto - UNAB</title>
    <!-- Bootstrap CSS -->
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
            background-color: #5c43a0;
            border-color: #5c43a0;
        }
        footer {
            background-color: #fc9928;
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
            <a class="navbar-brand" href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm7hzhCG-M6xpRWhY7dr0poid_mB6i1MZNEg&s" alt="Logo UNAB" height="80px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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

    <!-- Formulario de Nuevo Producto -->
    <div class="container mt-5">
        <h2 class="text-center mb-4" style="color: #ff6600;">Crear Nuevo Producto</h2>
        
        <form>
            <!-- Nombre del Producto -->
            <div class="mb-3">
                <label for="nombreProducto" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="nombreProducto" placeholder="Ejemplo: Laptop ASUS ROG" required>
            </div>

            <!-- Descripción del Producto -->
            <div class="mb-3">
                <label for="descripcionProducto" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcionProducto" rows="3" placeholder="Escribe una descripción corta del producto" required></textarea>
            </div>

            <!-- Categoría del Producto -->
            <div class="mb-3">
                <label for="categoriaProducto" class="form-label">Categoría</label>
                <select class="form-select" id="categoriaProducto" required>
                    <option value="">Selecciona una categoría</option>
                    <option value="laptops">Laptops</option>
                    <option value="monitores">Monitores</option>
                    <option value="accesorios">Accesorios</option>
                    <option value="componentes">Componentes</option>
                </select>
            </div>

            <!-- Precio del Producto -->
            <div class="mb-3">
                <label for="precioProducto" class="form-label">Precio ($USD)</label>
                <input type="number" class="form-control" id="precioProducto" placeholder="Ejemplo: 1499.99" required min="0">
            </div>

            <!-- Etiquetas o Tags del Producto -->
            <div class="mb-3">
                <label for="tagsProducto" class="form-label">Etiquetas (separadas por comas)</label>
                <input type="text" class="form-control" id="tagsProducto" placeholder="Ejemplo: Gaming, SSD, RTX 4060">
            </div>

            <!-- Imagen del Producto -->
            <div class="mb-3">
                <label for="imagenProducto" class="form-label">Imagen del Producto</label>
                <input type="file" class="form-control" id="imagenProducto" accept="image/*" required>
            </div>

            <!-- Botones de Acción -->
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary w-100">📦 Crear Producto</button>
                <button type="reset" class="btn btn-secondary w-100">🔄 Limpiar Formulario</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="py-4 text-center mt-5">
        <p>&copy; 2025 Universidad Autónoma de Bucaramanga. Todos los derechos reservados.</p>
        <a href="#">Aviso de privacidad</a>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
