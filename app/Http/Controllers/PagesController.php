<?php

namespace App\Http\Controllers;

use App\Puesto;
use App\Platillo;
use App\Tag;
use Request;

use App\Http\Requests;



class PagesController extends Controller
{
    public function index(){
      $puestos =  Puesto::all();
      return view('index')->with('puestos',$puestos);
    }

    public function puesto($id){
      $puesto = Puesto::findOrFail($id);
      $platillos = $puesto->platillos;
      return view('puestos.puesto', compact('puesto','platillos'));
    }

    public function crearPuesto(){
      return view('puestos.crear');
    }

    public function guardarPuesto(Requests\PuestoRequest $request){
      Puesto::create($request->all());
      return redirect('/');
    }

    public function editarPuesto($id){
      $puesto = Puesto::findOrFail($id);
      return view('puestos.editar')->with('puesto',$puesto);
    }

    public function updatePuesto($id, Requests\PuestoRequest $request){
      $puesto = Puesto::findOrFail($id);
      $puesto->update($request->all());
      return redirect('/');
    }

    public function platillo($id){
      $platillo = Platillo::findOrFail($id);
      $puesto = $platillo->puesto;
      $tags = $platillo->tags;
      return view('platillos.platillo', compact('platillo','puesto','tags'));
    }

    public function busqueda(Requests\BusquedaRequest $request){

      $t = Tag::all()->where('nombre','=',$request->get('tag'))->first();
      if($t){
        $platillos = $t->platillos;
        return view('busqueda',compact('t','platillos'));
      }else{
        return redirect('/');
      }
    }
}
