<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Http\Resources\UnitResource;
use Illuminate\Http\Request;


class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //response all data
        return ( new UnitResource(Unit::all()) )
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
        return ( new UnitResource( Unit::create( $request->all() ) ) )
                ->response()
                ->setStatusCode(201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //generate the response json based from the data array return by resource
        return ( new UnitResource( $unit ) )
                ->response()
                ->setStatusCode(200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        //update unit based on the http json body that is sent
        $unit->update( $request->all() );

        return ( new UnitResource( $unit ) )
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        //soft delete and response empty json
        $unit->delete();
        return response()->json(null, 204);

    }
}
