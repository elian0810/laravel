<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appoiment;
class appoimentController extends Controller
{
    /**
     * Nos muestra todas las citas realizadas
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $appoiment = Appoiment::all();
        // return $appoiment;
        return view('event.index');

        //
    }

    /**
     * validamos nuestros campos a crear y si pasan los insertadmos en nustras abse de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
             #aplicamos la validacion que especificamos en nuestro modelo
             request()->validate(Appoiment::$rules);
            #nos traemos todos los campos ingresados
             $input = $request->all();
              #creamos todos los campos validadps
             $appoiment = Appoiment::create($input);
             return $input;
        } catch (\Throwable $th) {
            // dump($this->paginateList);
            $this->input = ['no se pudo ingresar'];
        }




        //
    }

    /**
     * aplicamos un filtro en nustro listado por id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        #especificamos nuestro modelo y filtramos po el id
        $appoiment = Appoiment::find($id);
        return $appoiment;
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
     * #Elimnimaos una cita por el id seleccionado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        #especifiamos nustro modelo para poder eliminar el id selecionado
        $appoiment = Appoiment::destroy($id);
        return $appoiment;
    }
}
