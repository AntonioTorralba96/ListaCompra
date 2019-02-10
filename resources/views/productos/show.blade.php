@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            {{-- TODO: Imagen genérica de los productos --}}
            <img src="https://picsum.photos/200/300/?random" class="img-fluid"/><br><br>

            <button type="button" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Insertar Imagen</button>

        </div>
        <div class="col-sm-8">

            {{-- TODO: Datos del producto --}}
            <p><b>Producto:</b>{{$productos->nombre}}</p>
            <p><b>Categoria:</b>{{$productos->categoria}}</p>

            @if( $productos->pendiente==0 )
                <p>Estado: Producto sin comprar</p>
                <a class="btn btn-primary" role="button">Comprar</a>
                <a class="btn btn-danger" role="button">Pendiente de compra</a>
                <a class="btn btn-warning" href="{{ url('/productos/edit/' . $productos->id ) }}">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    Editar producto</a>

            @elseif ($productos->pendiente==1)
                <p>Estado: Producto comprado</p>
                <a class="btn btn-danger"  role="button">Comprado</a>
                <a class="btn btn-danger" role="button">Pendiente de compra</a>
                <a class="btn btn-warning" href="{{ url('/productos/edit/' . $productos->id ) }}">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    Editar producto</a>
            @endif

        </div>
    </div>

@stop