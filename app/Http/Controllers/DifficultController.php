<?php

namespace App\Http\Controllers;

use App\Models\ObjectResponse;
use App\Models\Difficult;
use Illuminate\Http\Request;

class DifficultController extends Controller
{

    /**
     * Mostrar lista de todas las difficultades.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = ObjectResponse::DefaultResponse();
        try {
            // $lista = DB::select('SELECT * FROM users where active = 1');
            // $list = Difficult::select('difficult_id','difficult_name', 'difficult_score')
            // ->get();
            
            // $response = ObjectResponse::CorrectResponse();
            // data_set($response,'message','peticion satisfactoria | lista de dificultades.');
            // data_set($response,'data',$list);
            $list = Difficult::whereNotNull('difficult_id')
            ->select('difficults.difficult_id','difficults.difficult_name', 'difficults.difficult_score')
            ->orderBy('difficults.difficult_name', 'asc')->get();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'Peticion satisfactoria. Lista de dificultades:');
            data_set($response, 'data', $list);

        } catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = ObjectResponse::DefaultResponse();
        try {
            $new_difficult = Difficult::create([
                'difficult_name' => $request->difficult_name,
                'difficult_score' => $request->difficult_score,
            ]);
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | dificultad registrada.');
            data_set($response,'alert_text','dificultad registrada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response, $response["status_code"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Difficult  $difficult
     * @return \Illuminate\Http\Response
     */
    public function show(Difficult $difficult, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $difficult = Difficult::where('difficult_id', $id)
            ->select('difficults.difficult_id','difficults.difficult_name','difficults.difficult_score')
            ->get();
            
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | dificultad encontrada.');
            data_set($response,'data',$difficult);
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Difficult  $difficult
     * @return \Illuminate\Http\Response
     */
    public function edit(Difficult $difficult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Difficult  $difficult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Difficult $difficult)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $difficult = Difficult::where('difficults.difficult_id', $request->difficult_id)
            ->update([
                'difficult_name' => $request->difficult_name,
                'difficult_score' => $request->difficult_score,
            ]);

            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | respuesta actualizada.');
            data_set($response,'alert_text','Respuesta actualizada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Difficult  $difficult
     * @return \Illuminate\Http\Response
     */
    public function destroy(Difficult $difficult, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            Difficult::where('difficult_id', $id)
            ->delete();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'petición satisfactoria. Dificultad eliminada.');
            data_set($response, 'alert_text', 'Dificultad eliminada.');
        }
        catch(\Exception $ex){
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }
}
