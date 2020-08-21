<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{

    public function __construct()
    {
        $this->middleware('autorizacion');
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
        dd($request->all());
        $validatedData = $request->validate([
            'select_categoria' => 'required',
            'nombre' => 'required|min:2',
            'descripcion_corta' => 'required|min:2',
            'precio_venta' => 'required',
            'imagen' => 'required|image',
        ]);
        
        //Cargar imagen y guardar en la carpeta public
        $file = $request->file('imagen');
        $path = public_path(). '/imagenes/producto';
        $fileName = uniqid(). $file->getClientOriginalName();
        $file->move($path, $fileName);

        $producto = new Producto;
        $producto->categoria_id = $request->select_categoria;
        $producto->nombre = $request->nombre;
        $producto->descripcion_corta = $request->descripcion_corta;
        $producto->descripcion = $request->descripcion;
        $producto->detalle_producto = $request->detalle_producto;
        $producto->precio_venta = $request->precio_venta;
        if($request->oferta){
            $producto->oferta = $request->oferta;
        }
        $producto->imagen = $fileName;

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
            'nombre' => 'required|min:2',
            'descripcion_corta' => 'required|min:2',
            'precio_venta' => 'required',
        ]);

       
      $producto->categoria_id = $request->select_categoria;
        $producto->nombre = $request->nombre;
        $producto->descripcion_corta = $request->descripcion_corta;
        $producto->descripcion = $request->descripcion;
        $producto->detalle_producto = $request->detalle_producto;
        $producto->precio_venta = $request->precio_venta;
        if($request->oferta){
            $producto->oferta = $request->oferta;
        }

        if(request('imagen')){
            //Eliminamos la imagen antes de guardar el nuevo editado
            $full_path = public_path(). '/imagenes/producto/'. $producto->imagen;
            File::delete($full_path);

            //Cargar imagen y guardar en la carpeta public
            $file = $request->file('imagen');
            $path = public_path(). '/imagenes/producto';
            $fileName = uniqid(). $file->getClientOriginalName();
            $file->move($path, $fileName);

            //Cargamos la nueva ruta en la bd
            $producto->imagen = $fileName;
        }
       

        $producto->save();

        //return redirect()->action('ProductoController@index');
        return redirect()->route('producto.index');
    }

  
    public function destroy(Producto $producto)
    {
        $galeria = $producto->galeria;
        
        //return count($galeria);
        if(count($galeria) === 0){
            //Eliminamos la imagen antes de guardar el nuevo editado
            $full_path = public_path(). '/imagenes/producto/'. $producto->imagen;
            File::delete($full_path);
            $producto->delete();
            return 'true';
        }else{
            $mensaje = 'El producto tiene fotos de galeria, eliminelos antes de poder eliminar el producto';
            return $mensaje;
        }

       
        //return redirect()->route('producto.index');
    }

    public function destacar(Producto $producto){
        $producto->destacado = true;
        $producto->save();

        return;
    }

    public function nodestacar(Producto $producto){
        $producto->destacado = false;
        $producto->save();

        return;
    }
}
