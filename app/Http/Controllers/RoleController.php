<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\ObjectResponse;
use Illuminate\Http\Request;

class RoleController extends Controller
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
            $list = Role::where('role_active', true)
            ->select('roles.role_name', 'roles.role_active')
            ->orderBy('roles.role_name', 'asc')->get();
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'Peticion satisfactoria. Lista de roles:');
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
            $new_role = Role::create([
                'role_name' => $request->role_name,
                'role_active' => $request->role_active,
            ]);
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | rol registrada.');
            data_set($response,'alert_text','rol registrada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response, $response["status_code"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $role = Role::where('role_id', $id)
            ->select('roles.role_name','roles.role_active')
            ->get();
            
            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | rol encontrado.');
            data_set($response,'data',$role);
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            $role = Role::where('roles.role_id', $request->role_id)
            ->update([
                'role_name' => $request->role_name,
                'role_active' => $request->role_active,
            ]);

            $response = ObjectResponse::CorrectResponse();
            data_set($response,'message','peticion satisfactoria | rol actualizado.');
            data_set($response,'alert_text','Rol actualizada');
        }
        catch (\Exception $ex) {
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role, int $id)
    {
        $response = ObjectResponse::DefaultResponse();
        try{
            Role::where('role_id', $id)
            ->update([
                'role_active'=>false,
                'deleted_at'=> date('Y-m-d H:i:s'),
            ]);
            $response = ObjectResponse::CorrectResponse();
            data_set($response, 'message', 'petición satisfactoria.');
            data_set($response, 'alert_text', 'Rol eliminado (actualizado a false).');
        }
        catch(\Exception $ex){
            $response = ObjectResponse::CatchResponse($ex->getMessage());
        }
        return response()->json($response,$response["status_code"]);
    }
}
