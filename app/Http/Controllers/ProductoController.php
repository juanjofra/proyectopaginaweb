<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $productos =  Producto::paginate(10);
        return view('Producto.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::where('activo', 1)->get(['id', 'nombre']);
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

        

        $producto = new Producto;
        $producto->categoria_id = $request->select_categoria;
        $producto->titulo = $request->titulo;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;

        $ruta_imagen = $request['imagen']->store('imagen-productos/'.$request->nombre, 'public');
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
        $categorias = Categoria::where('activo', 1)->get(['id', 'nombre']);
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
        
        $producto->descripcion = $request->descripcion;

         if(request('nombre')){
            Storage::deleteDirectory($producto->nombre);
            //  $ruta_imagen_old = $producto->imagen;
            //  $ruta_imagen = str_replace($producto->nombre, "$request->nombre", $producto->imagen);
            //  //dd($ruta_imagen);
            //  Storage::move('store/'.$ruta_imagen_old, 'store/'.$ruta_imagen);
            //  $producto->imagen = $ruta_imagen;

       
         }

        $producto->nombre = $request->nombre;

        if(request('imagen')){
            $ruta_imagen = $request['imagen']->store('imagen-productos/'.$request->nombre, 'public');
            $producto->imagen = $ruta_imagen;
        }
       

        $producto->save();

        //return redirect()->action('ProductoController@index');
        return redirect()->route('producto.index');
    }

  
    public function destroy(Producto $producto)
    {
        
        //Storage::delete("imagen-productos/$producto->imagen");
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
