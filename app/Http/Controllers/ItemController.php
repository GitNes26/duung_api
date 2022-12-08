<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Game;
use App\Models\ObjectResponse;
use Illuminate\Http\Request;

class ItemController extends Controller
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
        
            $list = Item::whereNotNull('item_id')
            ->join('types_question', 'item_tq_id', '=', 'tq_id')
            ->join('rounds', 'round_id', '=', 'item_round_id')
            ->select('types_question.tq_id', 'types_question.tq_name', 'items.item_question',
            'items.item_time', 'items.item_used')
            ->orderBy('items.item_question', 'asc')->get();

            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'Peticion satisfactoria. Lista de items:');
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
            $item = Item::create([
                'item_tq_id' => $request->item_tq_id,
                'item_question' => $request->item_question,
                'item_time' => $request->item_time,
                'item_used' => $request->item_used,
                'item_round_id'=> $request->item_round_id
            ]);
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | item registrado.');
            data_set($response,'alert_text','item registrado');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response, $response["status_code"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $item = Item::where('item_id', $id)
            ->from('items')
            ->join('types_question', 'item_tq_id', '=', 'tq_id')
            ->join('rounds', 'round_id', '=', 'item_round_id')
            ->select('types_question.tq_id', 'types_question.tq_name', 'items.item_question',
            'items.item_time', 'items.item_used')
            ->orderBy('items.item_question', 'asc')->get();
            
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | item encontrado.');
            data_set($response,'data',$item);
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $item = Item::where('items.item_id', $request->item_id)
            ->update([
                'item_round_id' => $request->item_round_id,
                'item_tq_id' => $request->item_tq_id,
                'item_question' => $request->item_question,
                'item_time' => $request->item_time,
                'item_used' => $request->item_used,
            ]);

            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | Item actualizado.');
            data_set($response,'alert_text','Item actualizada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            Item::where('item_id', $id)
            ->delete();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'petición satisfactoria. Item eliminado.');
            data_set($response, 'alert_text', 'Item eliminado.');
        }
        catch(\Exception $ex){
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }
}
