<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreprojekRequest;
use App\Http\Requests\UpdateprojekRequest;
use App\Models\projek;

class ProjekController extends Controller
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
     * @param  \App\Http\Requests\StoreprojekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprojekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function show(projek $projek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function edit(projek $projek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprojekRequest  $request
     * @param  \App\Models\projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprojekRequest $request, projek $projek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function destroy(projek $projek)
    {
        //
    }
}
