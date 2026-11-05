<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'CaféMR')
    </title>

    <link
        rel="stylesheet"
        href="{{ asset('css/estilos.css') }}"
    >

</head>

<body>

    <header>

        <h1>
            <a href="{{ url('/') }}">
                CaféMR
            </a>
        </h1>

        <p>
            Tu cafetería online
        </p>

    </header>

    <nav>

        <a href="{{ url('/') }}">
            Inicio
        </a>

        <a href="{{ route('products.categories') }}">
            Menú
        </a>

        <a href="{{ route('admin.categories.index') }}">
            Categorías
        </a>

    </nav>

    <main>

        @yield('content')

    </main>

    <footer>

        <p>
            CaféMR - Producción Web
        </p>

        <p>
            Merino - Roges
        </p>

    </footer>

</body>

</html>