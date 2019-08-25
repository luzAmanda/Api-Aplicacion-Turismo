<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;

class ApiSucursalNegocioController extends Controller
{
    public function show(){

        

        header("Access-Control-Allow-Origin: *");
        $Suc=Sucursal::with(['negocio'])->get();
        return json_decode($Suc);
}
}
