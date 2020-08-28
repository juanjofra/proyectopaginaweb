<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Configuracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ConfiguracionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('autorizacion');
    }
    
    public function index()
    {
        $configuracion = Configuracion::first();
        $productosselect = Producto::get(['id', 'nombre']);
        return view('configuracion.index',compact('configuracion', 'productosselect'));
    }

   
    public function update(Request $request, Configuracion $configuracion)
    {
        //dd($request->all());
        $validator = $request->validate([
            'nombre_tienda'=>'required|max:150',
            'correo_contacto'=>'required|max:150',
            'telefono_contacto'=>'required|max:20',
            'direccion_tienda'=>'required|max:300',
            'horario_atencion'=>'required|max:200',
            'enlace_facebook'=>'max:200',
            'enlace_twitter'=>'max:200',
            'banner_1'=>'max:1000',
            'banner_2'=>'max:1000',
            'banner_3'=>'max:1000',
            'tipo_moneda'=>'required|max:20',
        ]);
        
        $configuracion->nombre_tienda = $request->nombre_tienda;
        $configuracion->correo_contacto = $request->correo_contacto;
        $configuracion->telefono_contacto = $request->telefono_contacto;
        $configuracion->direccion_tienda = $request->direccion_tienda;
        $configuracion->horario_atencion = $request->horario_atencion;
        $configuracion->enlace_facebook = $request->enlace_facebook;
        $configuracion->enlace_twitter = $request->enlace_twitter;
        $configuracion->nosotros = $request->nosotros;
        $configuracion->mensaje_delivery = $request->mensaje_delivery;
        $configuracion->producto_select_banner_1 = $request->producto_select_banner_1;
        $configuracion->producto_select_banner_2 = $request->producto_select_banner_2;
        $configuracion->producto_select_banner_3 = $request->producto_select_banner_3;
        $configuracion->producto_select_oferta_banner_1 = $request->producto_select_oferta_banner_1;
        $configuracion->producto_select_oferta_banner_2 = $request->producto_select_oferta_banner_2;
        $configuracion->tipo_moneda = $request->tipo_moneda;

        

        if(request('banner_1')){
            //Eliminamos la imagen antes de guardar el nuevo editado
            $full_path = public_path(). '/imagenes/slider/'. $configuracion->banner_1;
            File::delete($full_path);

            //Cargar imagen y guardar en la carpeta public
            $file = $request->file('banner_1');
            $path = public_path(). '/imagenes/slider';
            $fileName = uniqid(). $file->getClientOriginalName();
            $file->move($path, $fileName);

            //Cargamos la nueva ruta en la bd
            $configuracion->banner_1 = $fileName;
        }

        if(request('banner_2')){
            //Eliminamos la imagen antes de guardar el nuevo editado
            $full_path = public_path(). '/imagenes/slider/'. $configuracion->banner_2;
            File::delete($full_path);

            //Cargar imagen y guardar en la carpeta public
            $file = $request->file('banner_2');
            $path = public_path(). '/imagenes/slider';
            $fileName = uniqid(). $file->getClientOriginalName();
            $file->move($path, $fileName);

            //Cargamos la nueva ruta en la bd
            $configuracion->banner_2 = $fileName;
        }

        if(request('banner_3')){
            //Eliminamos la imagen antes de guardar el nuevo editado
            $full_path = public_path(). '/imagenes/slider/'. $configuracion->banner_3;
            File::delete($full_path);

            //Cargar imagen y guardar en la carpeta public
            $file = $request->file('banner_3');
            $path = public_path(). '/imagenes/slider';
            $fileName = uniqid(). $file->getClientOriginalName();
            $file->move($path, $fileName);

            //Cargamos la nueva ruta en la bd
            $configuracion->banner_3 = $fileName;
        }

        if(request('oferta_banner_1')){
            //Eliminamos la imagen antes de guardar el nuevo editado
            $full_path = public_path(). '/imagenes/slider/'. $configuracion->oferta_banner_1;
            File::delete($full_path);

            //Cargar imagen y guardar en la carpeta public
            $file = $request->file('oferta_banner_1');
            $path = public_path(). '/imagenes/slider';
            $fileName = uniqid(). $file->getClientOriginalName();
            $file->move($path, $fileName);

            //Cargamos la nueva ruta en la bd
            $configuracion->oferta_banner_1 = $fileName;
        }

        if(request('oferta_banner_2')){
            //Eliminamos la imagen antes de guardar el nuevo editado
            $full_path = public_path(). '/imagenes/slider/'. $configuracion->oferta_banner_2;
            File::delete($full_path);

            //Cargar imagen y guardar en la carpeta public
            $file = $request->file('oferta_banner_2');
            $path = public_path(). '/imagenes/slider';
            $fileName = uniqid(). $file->getClientOriginalName();
            $file->move($path, $fileName);

            //Cargamos la nueva ruta en la bd
            $configuracion->oferta_banner_2 = $fileName;
        }
       
        $configuracion->save();

        //return redirect()->action('configuracionController@index');
        return redirect()->route('configuracion.index');

    }

    public function destroyBanner1(Configuracion $configuracion)
    {
       //Eliminamos la imagen antes de guardar el nuevo editado
        $full_path = public_path(). '/imagenes/slider/'. $configuracion->banner_1;
        File::delete($full_path);
        $configuracion->banner_1 = "";
        $configuracion->producto_select_banner_1 = 0;
        $configuracion->save();
        return;
    }

     public function destroyBanner2(Configuracion $configuracion)
     {
        //Eliminamos la imagen antes de guardar el nuevo editado
        $full_path = public_path(). '/imagenes/slider/'. $configuracion->banner_2;
        File::delete($full_path);
        $configuracion->banner_2 = "";
        $configuracion->producto_select_banner_2 = 0;
        $configuracion->save();
        return;
     }

     public function destroyBanner3(Configuracion $configuracion)
     {
       //Eliminamos la imagen antes de guardar el nuevo editado
        $full_path = public_path(). '/imagenes/slider/'. $configuracion->banner_3;
        File::delete($full_path);
        $configuracion->banner_3 = "";
        $configuracion->producto_select_banner_3 = 0;
        $configuracion->save();
        return;
     }
  
     public function destroybannerOferta1(Configuracion $configuracion)
     {
        //Eliminamos la imagen
         $full_path = public_path(). '/imagenes/slider/'. $configuracion->oferta_banner_1;
         File::delete($full_path);
         $configuracion->oferta_banner_1 = "";
         $configuracion->producto_select_oferta_banner_1 = 0;
         $configuracion->save();
         return;
     }

     public function destroybannerOferta2(Configuracion $configuracion)
     {
        //Eliminamos la imagen
         $full_path = public_path(). '/imagenes/slider/'. $configuracion->oferta_banner_2;
         File::delete($full_path);
         $configuracion->oferta_banner_2 = "";
         $configuracion->producto_select_oferta_banner_2 = 0;
         $configuracion->save();
         return;
     }
}
