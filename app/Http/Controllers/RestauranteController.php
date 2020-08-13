<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestauranteController extends Controller
{
    public $alerta = null;
    public function index(){
        
        $restaurantes = DB::table('restaurante')->get();
        
        
        return view('restaurante.index', ['restaurantes' => $restaurantes,
                                            'alerta' => $this->alerta]);
    }
    
    
    public function crear() {
        
        return view('restaurante.crear');
        
    }
    
    public function crear_restaurante(Request $request){
        $nombre = $request->input('nombre');
        $descripcion = $request->input('des');
        $direccion = $request->input('dir');
        $ciudad = $request->input('ciudad');
        $url_foto = $request->input('url');
     
                
       $insert = DB::insert('insert into restaurante (id, nombre, descripcion, direccion, ciudad, url_foto) values (?, ?,?,?,?,?)', [null, $nombre, $descripcion, $direccion, $ciudad, $url_foto]);
//        var_d
        if ($insert){
            
            return redirect('/');
            
            
        }  
       
        
        
        
      }
      
      public function delete($id){
          $delete = DB::table('restaurante')->where('id', $id)->delete();
          
          if($delete){
            return redirect('/');
          }
      }
      
      
      public function reserva($id){
          return view('restaurante.fecha',['id' => $id]);
      }
    
      public  function up_reserva(Request $Request, $id){
          $fecha = $Request->input('fecha');
          $fechaActual = date('Y-m-d');
          $Reservas =  DB::select("select id from reserva where id_restaurante = :id and fecha = :fecha", ['id' => $id, 'fecha' => $fecha]);
          $cont = count($Reservas);
          var_dump($cont);
          
          
          if ($fecha >= $fechaActual && $cont < 15){
               
       $insert = DB::insert('insert into reserva (id, id_restaurante, estado, fecha) values (?, ?,?,?)', [null, $id, 'aprovado', $fecha]);
          return redirect('/');
              
          }else{
            $this->alerta="No se pudo realizar la reserva";              
            return redirect('/');
          }
          
      }
    
    
}
