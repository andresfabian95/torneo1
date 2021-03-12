<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localidad;
class Localidadcontroller extends Controller
{
    //
    public function index(){
        //select * from users
        $localidad=Localidad::all();
        return view('Torneo.localidad.index',compact('localidad'));

    }
    public function create(){
        return view('Torneo.localidad.create');

    }

    public function store(Request $request){

        // return $request->all();
        $localidad=Localidad::create($request->all());
        return redirect(route('Localidad.index'));

    }
    public function show($id){
        $localidad=Localidad::find($id);
        return view('Torneo.localidad.show',compact('localidad'));
        //return $user;


    }

    public function  destroy($id){
        $localidad=Localidad::find($id)->delete();
        return redirect(route('Localidad.index'));

    }

    public function edit($id){
        $localidad=Localidad::find($id);
        return view('Torneo.localidad.edit',compact('localidad'));

    }

    public function update(request $request,$id ){
        $localidad=Localidad::find($id)->update($request->all());
        return redirect(route('Localidad.show',$id));

    }




}
