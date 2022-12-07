<?php

namespace App\Http\Controllers;

use App\Models\Round;
use App\Models\ObjectResponse;
use Illuminate\Http\Request;

class RoundController extends Controller
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
            $list = Round::whereNotNull('round_id')
            ->join('subjets', 'rounds.round_subjet_id', '=', 'subjets.subjet_id')
            ->join('difficults', 'rounds.round_difficult_id', '=', 'difficults.difficult_id')
            ->select('rounds.round_id','subjets.subjet_name', 'difficults.difficult_name', 
            'rounds.round_quantity_items', 'rounds.round_name',
            'rounds.round_quantity_items', 'rounds.round_correct_min')
            ->orderBy('rounds.round_id', 'asc')->get();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'Peticion satisfactoria. Lista de rounds:');
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
            $round = Round::create([
                'round_name' => $request->round_name,
                'round_subjet_id'=> $request->round_subjet_id,
                'round_difficult_id' => $request->round_difficult_id,
                'round_quantity_items' => $request->round_quantity_items,
                'round_correct_min' => $request->round_correct_min,
            ]);
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | round registrado.');
            data_set($response,'alert_text','round registrado');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response, $response["status_code"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Round  $round
     * @return \Illuminate\Http\Response
     */
    public function show(Round $round, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $round = Round::where('round_id', $id)
            ->join('subjets', 'rounds.round_subjet_id', '=', 'subjets.subjet_id')
            ->join('difficults', 'rounds.round_difficult_id', '=', 'difficult_id')
            ->select('round_id', 'rounds.round_name', 'subjets.subjet_name', 'difficult_name', 'rounds.round_quantity_items',
            'rounds.round_correct_min')
            ->get();
            
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | round encontrado.');
            data_set($response,'data',$round);
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Round  $round
     * @return \Illuminate\Http\Response
     */
    public function edit(Round $round)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Round  $round
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Round $round)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $round = Round::where('rounds.round_id', $request->round_id)
            ->update([
                'round_name' => $request->round_name,
                'round_subjet_id' => $request->round_subjet_id,
                'round_difficult_id' => $request->round_difficult_id,
                'round_quantity_items' => $request->round_quantity_items,
                'round_correct_min' => $request->round_correct_min,
            ]);

            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | Round actualizado.');
            data_set($response,'alert_text','Round actualizada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Round  $round
     * @return \Illuminate\Http\Response
     */
    public function destroy(Round $round, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            Round::where('round_id', $id)
            ->delete();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'petición satisfactoria. Round eliminado.');
            data_set($response, 'alert_text', 'Round eliminado.');
        }
        catch(\Exception $ex){
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }
}
