@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            {{-- TODO: Imagen genérica de los productos --}}
            <img src="https://picsum.photos/200/300/?random" class="img-fluid"/><br><br>

        </div>
        <div class="col-sm-8">

            {{-- TODO: Datos del producto --}}
            <p><b>Producto:</b>{{$productos->nombre}}</p>
            <p><b>Categoria:</b>{{$productos->categoria}}</p>

            @if($productos->pendiente==0)
                Producto sin comprar.
                @php
                    $class = "btn btn-danger";
                    $texto = "Comprar";
                @endphp
            @else

                Producto actualmente comprado.
                @php
                    $class = "btn btn-success";
                    $texto = "Devolver";
                @endphp
            @endif

            <form action="{{ url('productos/buy/' . $productos->id) }}" method="POST">
                {{ method_field('PUT') }}
                @csrf
                <input type="submit" class="{{$class}}" value="{{$texto}}"/>
            </form>

            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $productos->id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar producto</a>
            <a class="btn btn-outline-info" href="{{ action('ProductoController@getIndex') }}">Volver al listado</a>

        </div>
    </div>

@stop