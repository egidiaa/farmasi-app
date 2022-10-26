<?php

namespace App\Http\Controllers;

use App\Models\Apoteker;
use App\Http\Requests\StoreApotekerRequest;
use App\Http\Requests\UpdateApotekerRequest;

class ApotekerController extends Controller
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
     * @param  \App\Http\Requests\StoreApotekerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApotekerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apoteker  $apoteker
     * @return \Illuminate\Http\Response
     */
    public function show(Apoteker $apoteker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apoteker  $apoteker
     * @return \Illuminate\Http\Response
     */
    public function edit(Apoteker $apoteker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApotekerRequest  $request
     * @param  \App\Models\Apoteker  $apoteker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApotekerRequest $request, Apoteker $apoteker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apoteker  $apoteker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apoteker $apoteker)
    {
        //
    }
}
