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
            <p><b>Producto:</b>{{$productos[0]}}</p>
            <p><b>Categoria:</b>{{$productos[1]}}</p>

            <p>Estado: Producto actualmente comprado</p>
            <a class="btn btn-danger" role="button">Pendiente de compra</a>
        </div>
    </div>

@stop