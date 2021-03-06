<?php

namespace App\Http\Controllers;

use App\Galeria;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('autorizacion');
        $this->middleware('auth');
    }
    
    public function index(Producto $producto)
    {
        return view('Galeria.index', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'producto_id' => 'required',
            'imagen' => 'required|image',
        ]);

        //dd($producto);
        // $ruta_imagen = $request['imagen']->store('imagen-galeria/', 'public');

        //Cargar imagen y guardar en la carpeta public
        $file = $request->file('imagen');
        $path = public_path(). '/imagenes/galeria';
        $fileName = uniqid(). $file->getClientOriginalName();
        $file->move($path, $fileName);

        $galeria = new Galeria;
        $galeria->producto_id = $request->producto_id;
        $galeria->imagen = $fileName;

        $galeria->save();

        //return redirect()->action('GaleriaController@index');
        //return redirect()->route('galeria.index', ['producto_id' => $request->producto_id]);
        return back();
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(Galeria $galeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeria $galeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeria $galeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeria $galeria)
    {
       //Eliminamos la imagen
        $full_path = public_path(). '/imagenes/galeria/'. $galeria->imagen;
        File::delete($full_path);
        $galeria->delete();
        return back();
    }
}
