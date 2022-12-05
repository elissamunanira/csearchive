<?php

namespace App\Http\Controllers;

use App\Models\Ui;
use App\Http\Requests\StoreUiRequest;
use App\Http\Requests\UpdateUiRequest;

class UiController extends Controller
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
     * @param  \App\Http\Requests\StoreUiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ui  $ui
     * @return \Illuminate\Http\Response
     */
    public function show(Ui $ui)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ui  $ui
     * @return \Illuminate\Http\Response
     */
    public function edit(Ui $ui)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUiRequest  $request
     * @param  \App\Models\Ui  $ui
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUiRequest $request, Ui $ui)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ui  $ui
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ui $ui)
    {
        //
    }
}
