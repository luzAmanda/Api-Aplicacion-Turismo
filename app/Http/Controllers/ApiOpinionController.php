<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opinion;
class ApiOpinionController extends Controller
{
    public function create(Request $request){
        $calificacion= new Opinion();
        $calificacion->id_sucursal= $request->input('id_sucursal');

        $calificacion->titulo= $request->input('titulo');
        $calificacion->opinion= $request->input('opinion');
        $calificacion->calificacion= $request->input('calificacion');
        $calificacion->save();
        return response()->json($calificacion);
    }
}
