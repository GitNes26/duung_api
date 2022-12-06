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
            ->join('subjets', 'games.game_subjet_id', '=', 'subjets.subjet_id')//SUBJETS
            ->join('difficults', 'games.game_difficult_id', '=', 'difficults.difficult_id')//DIFFICULTS
            ->select('games.game_id','users.name', 'subjets.subjet_name',
            'difficults.difficult_name', 'games.game_title', 'games.game_description', 'games.game_score',
            'games.game_score', 'games.game_rate', 'games.game_quantity_items', 'games.game_time_item', 'games.game_complete')
            ->orderBy('games.game_title', 'asc')->get();
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
                'game_subjet_id' => $request->game_subjet_id,
                'game_difficult_id' => $request->game_difficult_id,
                'game_title' => $request->game_title,
                'game_description' => $request->game_description,
                'game_score' => $request->game_score,
                'game_rate' => $request->game_rate,
                'game_quantity_items' => $request->game_quantity_items,
                'game_time_item' => $request->game_time_item,
                'game_complete' => $request->game_complete,
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
            ->join('subjets', 'games.game_subjet_id', '=', 'subjets.subjet_id')//SUBJETS
            ->join('difficults', 'games.game_difficult_id', '=', 'difficults.difficult_id')//DIFFICULTS
            ->select('games.game_id','users.name', 'subjets.subjet_name',
            'difficults.difficult_name', 'games.game_title', 'games.game_description', 'games.game_score',
            'games.game_score', 'games.game_rate', 'games.game_quantity_items', 'games.game_time_item', 'games.game_complete')
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
                'game_subjet_id' => $request->game_subjet_id,
                'game_difficult_id' => $request->game_difficult_id,
                'game_title' => $request->game_title,
                'game_description' => $request->game_description,
                'game_score' => $request->game_score,
                'game_rate' => $request->game_rate,
                'game_quantity_items' => $request->game_quantity_items,
                'game_time_item' => $request->game_time_item,
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
