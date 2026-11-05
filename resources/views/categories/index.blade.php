@extends('layouts.app')

@section('title', 'Administrar categorías - CaféMR')

@section('content')

<section class="admin-section">

    <div class="admin-header">

        <div>
            <span class="inicio-label">Administración</span>

            <h1>Categorías</h1>

            <p>
                Desde esta sección podés administrar las categorías del menú de CaféMR.
            </p>
        </div>

        <a href="{{ route('admin.categories.create') }}" class="boton-principal">
            Nueva categoría
        </a>

    </div>

    @if (session('success'))

        <div class="mensaje-exito">
            {{ session('success') }}
        </div>

    @endif

    @if (session('error'))

        <div class="mensaje-error">
            {{ session('error') }}
        </div>

    @endif

    @if ($categories->isEmpty())

        <div class="admin-card">
            <h2>No hay categorías</h2>

            <p>
                Todavía no hay categorías cargadas.
            </p>
        </div>

    @else

        <div class="tabla-contenedor">

            <table class="tabla-admin">

                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Productos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($categories as $category)

                        <tr>

                            <td>
                                <strong>
                                    {{ $category->name }}
                                </strong>
                            </td>

                            <td>
                                {{ $category->description }}
                            </td>

                            <td>
                                {{ $category->products_count }}
                            </td>

                            <td>

                                <div class="acciones-tabla">

                                    <a
                                        href="{{ route('admin.categories.edit', $category) }}"
                                        class="boton-secundario"
                                    >
                                        Editar
                                    </a>

                                    <form
                                        action="{{ route('admin.categories.destroy', $category) }}"
                                        method="POST"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="boton-eliminar"
                                            onclick="return confirm('¿Seguro que querés eliminar esta categoría?')"
                                        >
                                            Eliminar
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    @endif

</section>

@endsection