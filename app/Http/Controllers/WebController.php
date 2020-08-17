<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use App\Web;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.index');
    }


    public function productos()
    {
        $productos = Producto::paginate(9);
        $categorias = Categoria::all();
        return view('web.productos', compact('productos', 'categorias'));
    }

    public function categoriaProductos(Categoria $categoria)
    {
        $categorias = Categoria::all();
        $productos = Producto::where('categoria_id', '=', $categoria->id)->paginate(2);
        return view('web.categoria-productos', compact('categorias', 'productos'));
    }

   
    public function detalleProducto(Producto $producto)
    {
        return view('web.detalle-producto', compact('producto'));
    }

   
    public function nosotros()
    {
        return view('web.nosotros');
    }

  
    public function contacto()
    {
        return view('web.contacto');
    }

  
   
}
