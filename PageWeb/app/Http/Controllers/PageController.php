<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function inicio(){
        $nota = App\Notas::all();/*metodo que trae todo la info de la base de datos*/
        return view('welcome',compact('nota'));
    }

    public function detalle($id){
        $nota2 = App\Notas::findOrFail($id);
        return view('nota.detalle', compact('nota2'));
    }

    public function crear(Request $request){
        //return  $request->all();

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notaNueva = new App\Notas;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();

        return back()->with('mensaje' , 'Agregado eficiente!!!!');//metodo que regresa
    }

    public function editar($id){
        $nota3 = App\Notas::findOrFail($id);
        return view('nota.editar', compact('nota3'));
    }

    public function update(Request $request, $id){
        
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notaUpdate = App\Notas::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;

        $notaUpdate->save();

        return back()->with('mensaje' , 'Su nota se ha actualizado!!!!');
    }

    public function eliminar($id){
        $notaEliminar = App\Notas::findOrFail($id);
        $notaEliminar->delete();

        return back()->with('mensaje' , 'Nota eliminada!!!!');
    }

    public function blog(){
        return view('blog');
    }

    public function fotos(){
        return view('fotos');
    }

    public function equipo($nombre = null){
        $equipo = ['Bayern','Madrid','Juventus'];

    //return view('controlStructure',['equipo'=>$equipo]);
    return view('controlStructure',compact('equipo','nombre'));
    }
}
