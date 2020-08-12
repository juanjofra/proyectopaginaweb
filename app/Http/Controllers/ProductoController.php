<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos =  Producto::paginate(10);
        return view('Producto.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::get(['id', 'nombre']);
        return view('Producto.create', compact('categorias'));
    }

    
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'select_categoria' => 'required',
            'titulo' => 'required|min:2',
            'nombre' => 'required|min:2',
            'descripcion' => 'required',
            'imagen' => 'required|image',
        ]);

        $ruta_imagen = $request['imagen']->store('imagen-productos', 'public');

        $producto = new Producto;
        $producto->categoria_id = $request->select_categoria;
        $producto->titulo = $request->titulo;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $ruta_imagen;

        $producto->save();

        //return redirect()->action('ProductoController@index');
        return redirect()->route('producto.index');
    }

    
    public function show(Producto $producto)
    {
        //
    }

   
    public function edit(Producto $producto)
    {
        $categorias = Categoria::get(['id', 'nombre']);
        return view('Producto.edit', compact('producto', 'categorias'));
    }

   
    public function update(Request $request, Producto $producto)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'select_categoria' => 'required',
            'titulo' => 'required|min:2',
            'nombre' => 'required|min:2',
            'descripcion' => 'required',
        ]);

       
        $producto->categoria_id = $request->select_categoria;
        $producto->titulo = $request->titulo;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;

        if(request('imagen')){
            $ruta_imagen = $request['imagen']->store('imagen-productos', 'public');
            $producto->imagen = $ruta_imagen;
        }
       

        $producto->save();

        //return redirect()->action('ProductoController@index');
        return redirect()->route('producto.index');
    }

  
    public function destroy(Producto $producto)
    {
        //
    }
}
