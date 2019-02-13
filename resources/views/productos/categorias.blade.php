@extends('layouts.master')

@section('content')

    <div class="row">
        @php
            $key = 0;
        @endphp
        @foreach( $categoria as $producto )
            @php
                $key++;
            @endphp
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <a href="{{ url('/productos/' . $producto->categoria) }}">
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$producto->categoria}}
                    </h4>
                </a>

            </div>
        @endforeach

    </div>

@stop