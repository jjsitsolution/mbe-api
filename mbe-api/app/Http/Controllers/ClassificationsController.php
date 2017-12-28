<?php

namespace App\Http\Controllers;

use App\Classification;
use App\Http\Resources\ClassificationResource;
use Illuminate\Http\Request;


class ClassificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //response all data
        return response()->json(
            new ClassificationResource(Classification::all()) ,
            200
        );
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
        return response()->json(
            new ClassificationResource( Classification::create( $request->all() ) ),
            201
        );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function show(Classification $classification)
    {
        //generate the response json based from the data array return by resource
        return response()->json(
            new ClassificationResource( $classification ),
            200
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function edit(Classification $classification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classification $classification)
    {
        //update classification based on the http json body that is sent
        $classification->update( $request->all() );

        return response()->json(
            new ClassificationResource( $classification ),
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classification $classification)
    {
        //soft delete and response empty json
        $classification->delete();
        return response()->json(null, 204);

    }
}
