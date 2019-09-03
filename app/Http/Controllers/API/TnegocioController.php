<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Tnegocio;

use Validator;

class TnegocioController extends BaseController
{
    public function index1()

    {

        $tNegocio = Tnegocio::all();
        return $this->sendResponse($tNegocio->toArray(), 'Tipos de negocios retrieved successfully.');
    }
    public function index2()

    {

        $Negocios=Tnegocio::with('negocios')->get();
        return $this->sendResponse($Negocios->toArray(), 'Tipos de negocios retrieved successfully.');
    }

    
 

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $input = $request->all();



        $validator = Validator::make($input, [

            'nombre' => 'required',

            'icono' => 'required'

        ]);



        if($validator->fails()){

            return $this->sendError('Validation Error.', $validator->errors());       

        }



        $tNegocio = Tnegocio::create($input);



        return $this->sendResponse($tNegocio->toArray(), 'Tipo de negocios created successfully.');

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */
    public function show($id)
    {
        header("Access-Control-Allow-Origin: *");
    //    $tNegocio = Tnegocio::with('negocios')->find($id);
        $tNegocio = Tnegocio::with('sucursales')->find($id);


        if (is_null($tNegocio)) {

            return $this->sendError('Negocios por tipo de negocio not found.');

        }
        return $this->sendResponse($tNegocio->toArray(), 'Negocio por Tipo de negocio retrieved successfully.');
    }


    public function show1($id)
    {
        header("Access-Control-Allow-Origin: *");
        $tNegocio = Tnegocio::find($id);



        if (is_null($tNegocio)) {

            return $this->sendError('Tipo de negocio not found.');

        }



        return $this->sendResponse($tNegocio->toArray(), 'Tipo de negocio retrieved successfully.');

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Tnegocio $tNegocio)

    {

        $input = $request->all();



        $validator = Validator::make($input, [

            'nombre' => 'required',

            'icono' => 'required'

        ]);



        if($validator->fails()){

            return $this->sendError('Validation Error.', $validator->errors());       

        }



        $tNegocio->nombre = $input['nombre'];

        $tNegocio->icono = $input['icono'];

        $tNegocio->save();



        return $this->sendResponse($tNegocio->toArray(), 'Tipo de negocio updated successfully.');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy(Tnegocio $tNegocio)

    {

        $tNegocio->delete();



        return $this->sendResponse($tNegocio->toArray(), 'Tnegocio deleted successfully.');

    }
}
