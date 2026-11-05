@extends('layouts.app')

@section('title', 'Nueva categoría - CaféMR')

@section('content')

<section class="formulario-contenedor">

    <div class="formulario-header">

        <span class="inicio-label">
            Administración
        </span>

        <h1>Nueva categoría</h1>

        <p>
            Cargá una nueva categoría para organizar los productos del menú.
        </p>

    </div>

    @if ($errors->any())

        <div class="mensaje-error">

            <strong>
                Revisá los siguientes errores:
            </strong>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif

    <form
        action="{{ route('admin.categories.store') }}"
        method="POST"
        class="formulario"
    >

        @csrf

        <div class="campo-formulario">

            <label for="name">
                Nombre
            </label>

            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name') }}"
            >

        </div>

        <div class="campo-formulario">

            <label for="description">
                Descripción
            </label>

            <textarea
                name="description"
                id="description"
                rows="5"
            >{{ old('description') }}</textarea>

        </div>

        <div class="formulario-acciones">

            <button type="submit" class="boton-principal">
                Guardar categoría
            </button>

            <a
                href="{{ route('admin.categories.index') }}"
                class="boton-secundario"
            >
                Volver
            </a>

        </div>

    </form>

</section>

@endsection