@extends('layouts.app')

@section('title', 'Editar categoría - CaféMR')

@section('content')

<section class="formulario-contenedor">

    <div class="formulario-header">

        <span class="inicio-label">
            Administración
        </span>

        <h1>Editar categoría</h1>

        <p>
            Modificá la información de la categoría seleccionada.
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
        action="{{ route('admin.categories.update', $category) }}"
        method="POST"
        class="formulario"
    >

        @csrf
        @method('PUT')

        <div class="campo-formulario">

            <label for="name">
                Nombre
            </label>

            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name', $category->name) }}"
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
            >{{ old('description', $category->description) }}</textarea>

        </div>

        <div class="formulario-acciones">

            <button type="submit" class="boton-principal">
                Guardar cambios
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