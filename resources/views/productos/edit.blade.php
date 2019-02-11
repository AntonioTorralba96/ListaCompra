@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Producto
                </div>
                <div class="card-body" style="padding:30px">

                    {{-- TODO: Abrir el formulario e indicar el método POST --}}
                    <form method="post" action="{{ url('productos/edit/' . $editProductos->id) }}">
                        {{method_field('PUT')}}
                    {{-- TODO: Protección contra CSRF --}}
                        @csrf
                    <div class="form-group">
                        <label for="title">Nombre</label>
                        <input type="text" name="nombre" value="{{ $editProductos->nombre }}" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Precio</label>
                        <input type="number" name="precio" value="{{ $editProductos->precio }}" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Categoría</label>
                        <input type="text" name="categoria" value="{{ $editProductos->categoria }}" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Imagen</label>
                        <input type="text" name="imagen" value="{{ $editProductos->imagen }}" id="title" class="form-control">
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Modificar producto
                        </button>
                    </div>

                    {{-- TODO: Cerrar formulario --}}
                    </form>

                </div>
            </div>
        </div>
    </div>

@stop