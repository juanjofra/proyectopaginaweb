<?php

namespace App\Http\Controllers;

use App\Galeria;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{

    public function __construct()
    {
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
        $ruta_imagen = $request['imagen']->store('imagen-galeria/', 'public');

        $galeria = new Galeria;
        $galeria->producto_id = $request->producto_id;
        $galeria->imagen = $ruta_imagen;

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
        //$url = Storage::url($galeria->imagen);
        //dd($galeria->imagen);
        $aux = Storage::delete($galeria->imagen);
        //unlink($imagen_path);
        return back();
    }
}
