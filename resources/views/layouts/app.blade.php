<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Evaluación Técnica Analista Desarrollo de Software')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Incluye CSS o Scripts aquí -->
</head>
<body>
    <header>
        <!-- Encabezado de la página -->
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <!-- Pie de página -->
    </footer>
</body>
</html>
