@extends('layouts.app')

@section('title', 'Inicio - CaféMR')

@section('content')

<section class="inicio-home">

    <div class="inicio-home-texto">

        <span class="inicio-label">
            Cafetería online
        </span>

        <h1>
            Tu café favorito, simple y rápido
        </h1>

        <p>
            En CaféMR podés consultar nuestro menú, conocer los productos disponibles
            y elegir lo que más te guste.
        </p>

        <div class="inicio-botones">

            <a href="{{ route('products.categories') }}" class="boton-principal">
                Ver menú
            </a>

        </div>

    </div>

    <div class="inicio-home-panel">

        <h2>CaféMR</h2>

        <div class="inicio-dato">
            <strong>Menú</strong>
            <span>Cafés, bebidas y opciones para acompañar.</span>
        </div>

        <div class="inicio-dato">
            <strong>Productos</strong>
            <span>Consultá categorías, precios y disponibilidad.</span>
        </div>

        <div class="inicio-dato">
            <strong>Pedidos</strong>
            <span>Más adelante vas a poder iniciar sesión y realizar tu pedido.</span>
        </div>

    </div>

</section>

<section class="inicio-destacado">

    <div>
        <span class="inicio-label">
            Nuestro menú
        </span>

        <h2>
            Encontrá algo para cualquier momento del día
        </h2>

        <p>
            Café caliente, café helado, bakery y opciones saladas.
            Explorá nuestras categorías y elegí tus productos favoritos.
        </p>

        <a href="{{ route('products.categories') }}" class="boton-principal">
            Explorar menú
        </a>
    </div>

</section>

@endsection