<?php

namespace App\Http\Controllers;

use App\Models\Tip;
use Illuminate\Http\Request;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = ObjectResponse::DefaultResponse();
        try {
            $list = Subjet::whereNotNull('id')
            ->select('tips.titulo','tips.contenido','tips.imagen','tips.enlace')
            ->orderBy('tips.id', 'asc')->get();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'Peticion satisfactoria. Lista de tips:');
            data_set($response, 'data', $list);
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response, $response["status_code"]);
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
            $new_game = Game::create([
                'id' => $request->id,
                'titulo' => $request->titulo,
                'contenido' => $request->contenido,
                'imagen' => $request->imagen,
                'enlace' => $request->enlace,
                // 'game_score' => $request->game_score,
                // 'game_rate' => $request->game_rate,
                // 'game_quantity_items_correct' => $request->game_quantity_items_correct,
                // 'game_complete' => $request->game_complete,
            ]);
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | tip registrado.');
            data_set($response,'alert_text','tip registrado');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response, $response["status_code"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function show(Tip $tip, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $tip = Tip::where('id', $id)
            ->select('id','titulo','contenido','imagen','enlace')
            ->orderBy('id', 'asc')
            ->get();
            
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | tip encontrado.');
            data_set($response,'data',$game);
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function edit(Tip $tip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tip $tip)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $tip = Game::where('id', $request->id)
            ->update([
                'titulo' => $request->titulo,
                'contenido' => $request->contenido,
                'imagen' => $request->imagen,
                'enlace' => $request->enlace,
            ]);

            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | tip actualizado.');
            data_set($response,'alert_text','tip actualizado');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tip $tip, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            Tip::where('id', $id)
            ->delete();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'petición satisfactoria. tip eliminado.');
            data_set($response, 'alert_text', 'Partida eliminado.');
        }
        catch(\Exception $ex){
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }
}
