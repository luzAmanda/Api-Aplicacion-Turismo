<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Negocio;
use App\Detalle;
use App\Sucursal;
use App\Promocion;
use App\SucursalDetalle;

class SucursalController extends BaseController
{
   
    
    
    public function show($id)
    {
         header("Access-Control-Allow-Origin: *");
        $Suc=Sucursal::with(['negocio','opinion','promocion'])->find($id);
       // $SucDet=Detalle::with(['sucursalDetalle','categoria'])->where('id_sucursal',$id);
     //  $SucDet = DB::table('detalles')->join('sucursal_detalle', 'sucursal_detalle.id_sucursal', '=',$id )->join('categorias', 'detalles.id_categoria', '=', 'categorias.id_categoria')->select('detalles.*', 'categorias.*')->get();
    //   DB::table('sucursal_detalle')->join('sucursales', 'sucursal.id_sucursal', '=', 'sucursal_detalle.id_sucursal')->join('detalles', 'detalles.id_detalle', '=', 'sucursal_detalle.id_detalle')->select('detalles.id_categoria');
      // DB::table('sucursal_detalle')->whereJsonContains('id_sucursaldetalle','=', 1)->join('detalles', 'detalles.id_detalle', '=', 'sucursal_detalle.id_detalle')->select('detalles.id_categoria')->get();
      // DB::table('sucursal_detalle')->whereJsonContains('id_sucursaldetalle','=', 1)->join('detalles', 'detalles.id_detalle', '=', 'sucursal_detalle.id_detalle')->join('categorias', 'detalles.id_categoria', '=', 'categorias.id_categoria');
      return $this->sendResponse($Suc->toArray(), 'Sucursales retrieved successfully.');
      Sucursal::with('categorias')->find(1);

     //   return json_decode($Suc);
    }
    public function show2($id)
    {
         header("Access-Control-Allow-Origin: *");
        $Suc= Sucursal::with('categorias')->find($id);
      return $this->sendResponse($Suc->toArray(), 'Categorias por id Sucursal retrieved successfully.');
     
     //   return json_decode($Suc);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
