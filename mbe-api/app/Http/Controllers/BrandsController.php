<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Resources\BrandResource;
use Illuminate\Http\Request;


class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //response all data
        return (new BrandResource(Brand::all()) )
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
        return ( new BrandResource( Brand::create( $request->all() ) ) )
                ->response()
                ->setStatusCode(201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //generate the response json based from the data array return by resource
        return (new BrandResource( $brand ))
                ->response()
                ->setStatusCode(200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //update brand based on the http json body that is sent
        $brand->update( $request->all() );

        return ( new BrandResource( $brand ) )
                ->response()
                ->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //soft delete and response empty json
        $brand->delete();
        return response()->json(null, 204);

    }
}
