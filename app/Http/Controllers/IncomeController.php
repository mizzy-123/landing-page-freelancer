<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreincomeRequest;
use App\Http\Requests\UpdateincomeRequest;
use App\Models\income;

class IncomeController extends Controller
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
     * @param  \App\Http\Requests\StoreincomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreincomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateincomeRequest  $request
     * @param  \App\Models\income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateincomeRequest $request, income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(income $income)
    {
        //
    }
}
