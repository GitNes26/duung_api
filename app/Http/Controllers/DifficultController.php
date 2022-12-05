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
            $list = Difficult::select('difficult_id','difficult_name', 'difficult_score')
            ->get();
            
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | lista de dificultades.');
            data_set($response,'data',$list);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Difficult  $difficult
     * @return \Illuminate\Http\Response
     */
    public function show(Difficult $difficult)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Difficult  $difficult
     * @return \Illuminate\Http\Response
     */
    public function destroy(Difficult $difficult)
    {
        //
    }
}
