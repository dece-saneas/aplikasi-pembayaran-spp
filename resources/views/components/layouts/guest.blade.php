<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - SMK Nusantara 1 Ciputat</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    {{ $style }}

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/icon type">
</head>

<body>
    <!-- Jumbotron -->
    <header class="masthead">
        <div class="container h-100 position-absolute top-50 start-50 translate-middle">
            <!-- Navbar -->
            <nav class="navbar container-navbar navbar-light navbar-expand-md bg-faded mx-auto">
                <div class="container">
                    <a href="{{ route('home') }}" class="navbar-brand d-flex w-50 me-auto"><img src="{{ asset('images/logo.svg') }}" /></a>
                </div>
            </nav>
            <!-- Content -->
            <div class="container-content row align-items-center position-absolute top-50 start-50 translate-middle">
                <div class="col col-kiri">{{ $illustration }}</div>
                <div class="col col-kanan">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </header>

    <!-- My JS -->
    <script src="{{ asset('js/scripts/show-password.js') }}"></script>
    <!-- Bootsrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    {{ $script }}
</body>

</html>