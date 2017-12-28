<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\Http\Resources\SupplierResource;
use Illuminate\Http\Request;


class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //response all data
        return ( new SupplierResource(Supplier::all()) )
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
        return ( new SupplierResource( Supplier::create( $request->all() ) ) )
                ->response()
                ->setStatusCode(201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //generate the response json based from the data array return by resource
        return ( new SupplierResource( $supplier ) )
                ->response()
                ->setStatusCode(200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //update supplier based on the http json body that is sent
        $supplier->update( $request->all() );

        return ( new SupplierResource( $supplier ) )
                ->response()
                ->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //soft delete and response empty json
        $supplier->delete();
        return response()->json(null, 204);

    }
}
