<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\ObjectResponse;
use Illuminate\Http\Request;

class AnswerController extends Controller
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
            $list = Answer::whereNotNull('answer_id')
            ->join('items', 'answers.answer_item_id', '=', 'items.item_id')
            ->select('answers.answer_text','answers.answer_correct', 'items.item_question')
            ->orderBy('answers.answer_id', 'ASC')
            ->get();
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message', 'peticion satisfactoria | lista de respuestas:');
            data_set($response, 'data', $list);
        }
        catch(\Exception $ex){
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
            $new_answer = Answer::create([
                'answer_text' => $request->answer_text,
                'answer_correct' => $request->answer_correct,
                'answer_item_id' => $request->answer_item_id
            ]);
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | respuesta registrada.');
            data_set($response,'alert_text','Respuesta registrada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response, $response["status_code"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $answer = Answer::where('answer_id', $id)
            ->join('items', 'answers.answer_item_id', '=', 'items.item_id')
            ->select('answers.answer_text','answers.answer_correct', 'items.item_question')
            ->get();
            
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | respuesta encontrada.');
            data_set($response,'data',$answer);
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $answer = Answer::where('answers.answer_id', $request->answer_id)
            ->update([
                'answer_text' => $request->answer_text,
                'answer_correct' => $request->answer_correct,
                'answer_item_id' => $request->answer_item_id
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
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            Answer::where('answer_id', $id)
            ->delete();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'petición satisfactoria. Respuesta eliminada.');
            data_set($response, 'alert_text', 'Respuesta eliminada.');
        }
        catch(\Exception $ex){
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }
}
