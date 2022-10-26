<?php

namespace App\Http\Controllers;

use App\Models\Pengadaan;
use App\Http\Requests\StorePengadaanRequest;
use App\Http\Requests\UpdatePengadaanRequest;

class PengadaanController extends Controller
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
     * @param  \App\Http\Requests\StorePengadaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengadaanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengadaan $pengadaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengadaan $pengadaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengadaanRequest  $request
     * @param  \App\Models\Pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengadaanRequest $request, Pengadaan $pengadaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengadaan $pengadaan)
    {
        //
    }
}
