<?php

namespace App\Http\Controllers;

use App\Models\ObjectResponse;
use App\Models\Subjet;
use App\Models\ObjectResponse;
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
<<<<<<< HEAD
            $list = Subjet::whereNotNull('subjet_id')
            ->select('subjets.subjet_name',)
            ->orderBy('subjets.subjet_name', 'asc')->get();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'Peticion satisfactoria. Lista de materias:');
            data_set($response, 'data', $list);
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response, $response["status_code"]);
=======
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
>>>>>>> 39fa9161d607c93e306e179b51eb59627431b40d
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
            $new_subjet = Subjet::create([
                'subjet_name' => $request->subjet_name,
            ]);
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | materia registrada.');
            data_set($response,'alert_text','materia registrada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response, $response["status_code"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subjet  $subjet
     * @return \Illuminate\Http\Response
     */
    public function show(Subjet $subjet, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $subjet = Subjet::where('subjet_id', $id)
            ->select('subjets.subjet_name')
            ->get();
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | materia encontrado.');
            data_set($response,'data',$subjet);
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
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
        $response = ObjectResponse::DefaultResponse();
        try{
            $subjet = Subjet::where('subjets.subjet_id', $request->subjet_id)
            ->update([
                'subjet_name' => $request->subjet_name,
            ]);

            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | materia actualizado.');
            data_set($response,'alert_text','Materia actualizada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subjet  $subjet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subjet $subjet, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            Subjet::where('subjet_id', $id)
            ->delete();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'petición satisfactoria. Materia eliminada.');
            data_set($response, 'alert_text', 'Materia eliminada.');
        }
        catch(\Exception $ex){
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }
}
