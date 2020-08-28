<?php

namespace App\Http\Controllers;

use App\Web;
use App\User;
use App\Producto;
use App\Categoria;
use App\Mail\FormContacto;
use App\Configuracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    
    public function index()
    {
        
        $productosDestacados = Producto::with('categoria')->where('destacado', 1)->inRandomOrder()->limit(6)->get();
        $categoriaDescatados = Categoria::where('destacado', 1)->get();
        $productosNuevos = Producto::orderBy('created_at', 'desc')->limit(4)->get();
        //dd($categoriaDescatados);
        return view('web.index', compact('categoriaDescatados', 'productosDestacados', 'productosNuevos'));
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
        $configuracion = Configuracion::all()->first();
        return view('web.nosotros', compact('configuracion'));
    }

    public function contacto()
    {
        return view('web.contacto');
    }

    public function formcontacto(Request $request){
        //dd($request->all());
        $validatedData = $request->validate([
            'author' => 'required',
            'email' => 'required|min:2',
            'comment' => 'required',
        ]);

        $users = User::where('autorizacion', '=', '1')->get();
        //dd($users);
        Mail::to($users)->send(new FormContacto($request->author, $request->email, $request->phone, $request->comment));
        
        return back()->with('message', 'Mensaje enviado, gracias por contactar con nosotros!');
    }
   
}
