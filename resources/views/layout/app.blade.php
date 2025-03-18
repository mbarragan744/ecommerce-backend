<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
            color: #6A4C9C; 
        }
        .btn-primary {
            background-color: #6A4C9C; 
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

    @include('layout.navbar')

    @yield('content')
    
    @include('layout.footer')

 

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
