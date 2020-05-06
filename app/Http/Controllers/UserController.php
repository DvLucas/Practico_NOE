<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UserController extends Controller
{
    public function vista(){
        $datos=App\User::find(auth()->id());
        return view('usuario',compact('datos'));
    }


    public function editar($dato){

        $datos=App\User::findOrFail(auth()->id());
        return view('user.editar',compact('datos'));


    }



        public function update(Request $request,$id){



            $datosUpdate=App\User::findOrFail($id);

            $datosUpdate->name=$request->name;
            $datosUpdate->surname=$request->surname;
            $datosUpdate->email=$request->email;
            $datosUpdate->description=$request->description;
            $datosUpdate->date_birth=$request->date_birth;
            $datosUpdate->dni=$request->dni;

            if($request->hasFile('profile_picture')){
                $datosUpdate->profile_picture=$request->file('profile_picture')->store('public');

            }



            $datosUpdate->save();


            return redirect('usuario')->with('mensaje','datos actualizados');


        }

}
