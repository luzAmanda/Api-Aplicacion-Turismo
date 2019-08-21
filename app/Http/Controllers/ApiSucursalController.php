<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;
use App\Calificacion;
use App\Negocio;


class ApiSucursalController extends Controller
{
    public function show(){

        

        header("Access-Control-Allow-Origin: *");
        $Suc=Sucursal::with(['negocio','plato','postre','bebida','combo','opinion'])->get();
        return json_decode($Suc);
}
}
