<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tab }}</title>

    <!-- Favicon -->
    <link href="assets/img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="/index" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">GreatStorage</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="/index" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">GreatStorage</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div></div>
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/index" class="nav-item nav-link">Inicio</a>
                            @if (Route::has('login'))
                                @auth    
                                    <a href="/producto" class="nav-item nav-link">Productos</a>
                                    <a href="/proveedor" class="nav-item nav-link">Proveedores</a>
                                    <a href="/sucursal" class="nav-item nav-link">Sucursales</a>
                                    <a>
                                        <form action="{{ route('logout') }}" method="POST" class="nav-item nav-link">
                                            @csrf
                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Cerrar Sesión') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-item nav-link">Inicia Sesión</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('login') }}" class="nav-item nav-link">Regístrate</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    {{ $slot }}

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>