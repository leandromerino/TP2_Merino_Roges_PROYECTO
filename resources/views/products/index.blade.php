@extends('layouts.app')

@section('title', $category->name . ' - CaféMR')

@section('content')

    <section>

        <a href="{{ route('products.categories') }}">
            Volver al menú
        </a>

        <h1>
            {{ $category->name }}
        </h1>

        <p>
            {{ $category->description }}
        </p>

        @if ($products->isEmpty())

            <p>No hay productos disponibles en esta categoría.</p>

        @else

            @foreach ($products as $product)

                <article>

                    <h2>
                        {{ $product->name }}
                    </h2>

                    <p>
                        {{ $product->description }}
                    </p>

                    <p>
                        <strong>
                            ${{ number_format($product->price, 2, ',', '.') }}
                        </strong>
                    </p>

                </article>

            @endforeach

        @endif

    </section>

@endsection