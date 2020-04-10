<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Marca;
use App\Producto;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        //
        $productos = Producto::Paginate(8);
        return view('inicio',
            [
                'productos'=>$productos
            ]);
    }

    public function producto($id)
    {   $producto = Producto::find($id);
        $vac = compact('producto');
        return view('producto', $vac);
    }

}