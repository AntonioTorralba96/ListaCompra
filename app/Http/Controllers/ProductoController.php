<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getIndex()
    {
        $arrayProductos= Producto::all();
        return view('productos.index', array('arrayProductos'=> $arrayProductos));
    }

    public function getShow($id)
    {
        $arrayProductos= Producto::findOrFail($id);
        return view('productos.show', array('productos'=>$arrayProductos));
    }

    public function getCreate()
    {
        return view('productos.create', array('createProductos'=>$this->arrayProductos));
    }

    public function getEdit($id)
    {
        $arrayProductos= Producto::findOrFail($id);
        return view('productos.edit', array('editProductos'=>$arrayProductos));
    }

}

