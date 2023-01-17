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
        // $appoiment = array();
        $bookings = Appoiment::all();
        return $bookings;
        // foreach($bookings as $booking){
        //     $events [] = [
        //         'name' =>$booking->name,
        //         'lastName'=>$booking->lastName,
        //         'identification'=>$booking->identification,
        //         'mascot'=>$booking->mascot,
        //         'start'=>$booking->start,
        //         'end'=>$booking->end,
        //     ];
        // }
        // return view('event.index',['events'=>$events]);
    }

    public function getevents()
    {
         $data = Appoiment::get(['name','lastName','identification','mascot','start', 'end']);
         return response()->json($data);
    }

    public function validateTime($start, $end)
    {

        $appoiment = AppoimentDB::select('*')
        ->whereTime('end', '>=', $end)
        ->first();
        return $appoiment == null ? true : false ;
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
            $this->input = [];
        }
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
        $appoiment['evetn'] = Appoiment::all();
        return response()->json($appointments['evetn']);
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
        request()->validate(Appoiment::$rules);
        $appoiment->update($request->all());
        return response()->json($appointments);

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
