@extends('layout.app')

@section('title')
producto
@endsection

@section('content')
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
@endsection
    
    


