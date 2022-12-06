<?php

namespace App\Http\Controllers;

use App\Models\Types_question;
use App\Models\ObjectResponse;
use Illuminate\Http\Request;

class TypesQuestionController extends Controller
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
            $list = Types_question::whereNotNull('tq_name')
            ->select('types_question.tq_id','types_question.tq_name',)
            ->orderBy('types_question.tq_name', 'asc')->get();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'Peticion satisfactoria. Lista de tipos de preguntas:');
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
            $new_tq = Types_question::create([
                'tq_name' => $request->tq_name,
            ]);
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | tipo de pregunta registrada.');
            data_set($response,'alert_text','tipo de pregunta registrada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response, $response["status_code"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Types_question  $types_question
     * @return \Illuminate\Http\Response
     */
    public function show(Types_question $types_question, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $types_question = Types_question::where('tq_id', $id)
            ->select('types_question.tq_id','types_question.tq_name')
            ->get();
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | tipo de pregunta encontrada.');
            data_set($response,'data',$types_question);
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Types_question  $types_question
     * @return \Illuminate\Http\Response
     */
    public function edit(Types_question $types_question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Types_question  $types_question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Types_question $types_question)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $subjet = Types_question::where('types_question.tq_id', $request->tq_id)
            ->update([
                'tq_name' => $request->tq_name,
            ]);

            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | tipo de pregunta actualizada.');
            data_set($response,'alert_text','Tipo de pregunta actualizada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Types_question  $types_question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Types_question $types_question, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            Types_question::where('tq_id', $id)
            ->delete();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'petición satisfactoria. Tipo de pregunta eliminada.');
            data_set($response, 'alert_text', 'Tipo de pregunta eliminada.');
        }
        catch(\Exception $ex){
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }
}
