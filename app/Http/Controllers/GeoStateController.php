<?php

namespace App\Http\Controllers;

use App\Models\GeoState;
use App\Http\Requests\StoreGeoStateRequest;
use App\Http\Requests\UpdateGeoStateRequest;

class GeoStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreGeoStateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGeoStateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeoState  $geoState
     * @return \Illuminate\Http\Response
     */
    public function show(GeoState $geoState)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeoState  $geoState
     * @return \Illuminate\Http\Response
     */
    public function edit(GeoState $geoState)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGeoStateRequest  $request
     * @param  \App\Models\GeoState  $geoState
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGeoStateRequest $request, GeoState $geoState)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeoState  $geoState
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeoState $geoState)
    {
        //
    }
}
