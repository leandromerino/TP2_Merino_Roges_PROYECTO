@extends('layouts.app')

@section('title', 'Menú - CaféMR')

@section('content')

    <section>

        <h1>Nuestro menú</h1>

        <p>
            Elegí una categoría para conocer nuestros productos.
        </p>

        @if ($categories->isEmpty())

            <p>No hay categorías disponibles.</p>

        @else

            @foreach ($categories as $category)

                <article>

                    <h2>
                        {{ $category->name }}
                    </h2>

                    <p>
                        {{ $category->description }}
                    </p>

                    <p>
                        {{ $category->products_count }}
                        producto{{ $category->products_count != 1 ? 's' : '' }}
                    </p>

                    <a href="{{ route('products.index', $category) }}">
                        Ver productos
                    </a>

                </article>

            @endforeach

        @endif

    </section>

@endsection