<?php

namespace App\Http\Controllers;

use App\Models\WaitingList;
use Illuminate\Http\Request;

class WaitingListController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client_details = $request->all();
        dd($client_details);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WaitingList  $waitingList
     * @return \Illuminate\Http\Response
     */
    public function show(WaitingList $waitingList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WaitingList  $waitingList
     * @return \Illuminate\Http\Response
     */
    public function edit(WaitingList $waitingList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WaitingList  $waitingList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WaitingList $waitingList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WaitingList  $waitingList
     * @return \Illuminate\Http\Response
     */
    public function destroy(WaitingList $waitingList)
    {
        //
    }
}
