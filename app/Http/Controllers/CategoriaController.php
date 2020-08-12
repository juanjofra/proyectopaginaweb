<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    
    public function index()
    {
        $categorias = Categoria::all();
        
        return view('Categoria.index', compact('categorias'));
        
    }

    
    public function create()
    {
        return view('Categoria.create');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:25',
            'descripcion' => 'required',
        ]);


        $categoria = new Categoria;

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

        $categoria->save();

        //return redirect()->action('CategoriaController@index');
        return redirect()->route('categoria.index');
    }

   
    public function show(Categoria $categoria)
    {
        //
    }

    
    public function edit(Categoria $categoria)
    {
        return view('Categoria.editar',  compact('categoria'));
    }

    
    public function update(Request $request, Categoria $categoria)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:25',
            'descripcion' => 'required',
        ]);

        $categoria->nombre = $validatedData['nombre'];
        $categoria->descripcion = $validatedData['descripcion'];
        $categoria->save();

        return redirect()->action('CategoriaController@index')->with('status', 'Profile updated!');
    }

  
    public function desactivar(Categoria $categoria)
    {
        //dd( $categoria );
        $categoria->activo = false;
        
        $categoria->save();
        return redirect()->route('categoria.index');
    }


    public function activar(Categoria $categoria)
    {
        //dd( $categoria );
        $categoria->activo = true;
        
        $categoria->save();
        return redirect()->route('categoria.index');
    }
}
