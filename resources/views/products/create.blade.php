
@extends('layout.app')

@section('title')
formulario
@endsection

@section('content')
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
@endsection
    

