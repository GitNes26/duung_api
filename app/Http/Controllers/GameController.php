<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\ObjectResponse;
use Illuminate\Http\Request;

class GameController extends Controller
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
            $list = Game::whereNotNull('games.game_id')
            ->join('users', 'games.game_user_id', '=', 'users.id')//USERS
            ->join('rounds', 'games.game_round_id', '=', 'rounds.round_id')//ROUNDS
            ->join('subjets', 'games.game_round_id', '=', 'subjets.subjet_id')//SUBJETS
            ->join('difficults', 'games.game_round_id', '=', 'difficults.difficult_id')//DIFFICULTS
            ->select('game_id','game_title','game_score','game_rate','game_quantity_items_correct','game_complete',
            'id','username','score',
            'round_id','round_name','round_quantity_items','round_correct_min',
            'difficult_id','difficult_name','difficult_score',
            'subjet_id','subjet_name')
            ->orderBy('game_id', 'desc')->get();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'Peticion satisfactoria. Lista de partidas');
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
                'game_user_id' => $request->game_user_id,
                'game_round_id' => $request->game_round_id,
                'game_title' => $request->game_title,
                'game_description' => $request->game_description,
                // 'game_score' => $request->game_score,
                // 'game_rate' => $request->game_rate,
                // 'game_quantity_items_correct' => $request->game_quantity_items_correct,
                // 'game_complete' => $request->game_complete,
            ]);
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | partida registrada.');
            data_set($response,'alert_text','partida registrada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response, $response["status_code"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $game = Game::where('game_id', $id)
            ->join('users', 'games.game_user_id', '=', 'users.id')//USERS
            ->join('rounds', 'games.game_round_id', '=', 'rounds.round_id')//ROUNDS
            ->join('subjets', 'games.game_round_id', '=', 'subjets.subjet_id')//SUBJETS
            ->join('difficults', 'games.game_round_id', '=', 'difficults.difficult_id')//DIFFICULTS
            ->select('game_id','game_title','game_score','game_rate','game_quantity_items_correct','game_complete',
            'id','username','score',
            'round_id','round_name','round_quantity_items','round_correct_min',
            'difficult_id','difficult_name','difficult_score',
            'subjet_id','subjet_name')
            ->orderBy('game_id', 'desc')
            ->get();
            
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | partida encontrada.');
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
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $game = Game::where('games.game_id', $request->game_id)
            ->update([
                'game_user_id' => $request->game_user_id,
                'game_round_id' => $request->game_round_id,
                'game_title' => $request->game_title,
                'game_description' => $request->game_description,
                'game_score' => $request->game_score,
                'game_rate' => $request->game_rate,
                'game_quantity_items_correct' => $request->game_quantity_items_correct,
                'game_complete' => $request->game_complete,
            ]);

            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | partida actualizada.');
            data_set($response,'alert_text','Partida actualizada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function gameComplete(Request $request, Game $game)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $game = Game::where('games.game_id', $request->game_id)
            ->update([
                'game_title' => $request->game_title,
                'game_description' => $request->game_description,
                'game_score' => $request->game_score,
                'game_rate' => $request->game_rate,
                'game_quantity_items_correct' => $request->game_quantity_items_correct,
                'game_complete' => $request->game_complete,
            ]);

            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | partida finalizada.');
            data_set($response,'alert_text','Partida actualizada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            Game::where('game_id', $id)
            ->delete();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'petición satisfactoria. Partida eliminada.');
            data_set($response, 'alert_text', 'Partida eliminada.');
        }
        catch(\Exception $ex){
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }
}
