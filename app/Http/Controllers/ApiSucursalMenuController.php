<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;
class ApiSucursalMenuController extends Controller
{
    public function show($id){
        header("Access-Control-Allow-Origin: *");
        $Suc=Sucursal::with(['plato','postre','bebida','combo','opinion'])->findOrfail($id);
      return json_decode($Suc);
      //  return Response::json($Suc);
}
}
