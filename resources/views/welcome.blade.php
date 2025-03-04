@extends('layout.app')

@section('title')
welcome
@endsection

@section('content')
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
    @endsection
  