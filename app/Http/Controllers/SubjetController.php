<?php

namespace App\Http\Controllers;

use App\Models\ObjectResponse;
use App\Models\Subjet;
use Illuminate\Http\Request;

class SubjetController extends Controller
{
    /**
     * Mostrar lista de todas las maetrias.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = ObjectResponse::DefaultResponse();
        try {
            // $lista = DB::select('SELECT * FROM users where active = 1');
            $list = Subjet::select('subjet_id','subjet_name')
            ->get();
            
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | lista de materias.');
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
     * @param  \App\Models\Subjet  $subjet
     * @return \Illuminate\Http\Response
     */
    public function show(Subjet $subjet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subjet  $subjet
     * @return \Illuminate\Http\Response
     */
    public function edit(Subjet $subjet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subjet  $subjet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subjet $subjet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subjet  $subjet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subjet $subjet)
    {
        //
    }
}
