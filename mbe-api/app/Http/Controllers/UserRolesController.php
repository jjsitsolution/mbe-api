<?php

namespace App\Http\Controllers;

use App\UserRole;
use App\Http\Resources\UserRoleResource;
use Illuminate\Http\Request;


class UserRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //response all data
        return ( UserRoleResource::collection(UserRole::all()) )
                ->response()
                ->setStatusCode(200);
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
        //return json based from the resource data
        return ( new UserRoleResource( UserRole::create( $request->all() ) ) )
                ->response()
                ->setStatusCode(201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function show(UserRole $userRole)
    {
        //generate the response json based from the data array return by resource
        return ( new UserRoleResource( $userRole ) )
                ->response()
                ->setStatusCode(200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRole $userRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRole $userRole)
    {
        //update userRole based on the http json body that is sent
        $userRole->update( $request->all() );

        return ( new UserRoleResource( $userRole ) )
                ->response()
                ->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRole $userRole)
    {
        //soft delete and response empty json
        $userRole->delete();
        return response()->json(null, 204);

    }
}
