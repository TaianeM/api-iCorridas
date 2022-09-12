<?php

namespace App\Http\Controllers;

use App\Models\CouponType;
use App\Http\Requests\StoreCouponTypeRequest;
use App\Http\Requests\UpdateCouponTypeRequest;

class CouponTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreCouponTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouponTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CouponType  $couponType
     * @return \Illuminate\Http\Response
     */
    public function show(CouponType $couponType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CouponType  $couponType
     * @return \Illuminate\Http\Response
     */
    public function edit(CouponType $couponType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCouponTypeRequest  $request
     * @param  \App\Models\CouponType  $couponType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouponTypeRequest $request, CouponType $couponType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CouponType  $couponType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CouponType $couponType)
    {
        //
    }
}
