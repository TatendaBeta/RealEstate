<?php

namespace App\Http\Controllers;

use App\Models\WaitingList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\User;

class WaitingListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waitinglist = WaitingList::all();
        return view('WaitingList.index', compact('waitinglist'), ['users'=>User::all(), 'waitinglists'=>WaitingList::all() ]);
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
        $client_details = Auth::user();
        // dd($client_details->id);
        // dd($request);

        // $table->foreignId('property_id')->constrained('properties');
        // $table->foreignId('client_id')->constrained('clients');

        $data=new WaitingList;
        $data->property_id = $request->input('property_id');
        $data->client_id = $client_details->id;
        if($data->save()){
            return redirect('tryy')->withMessage('Added to Waiting List');
            
        }
        else{
            
            return redirect('tryy')->withMessage('Failed to add to Waiting List');
        }





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
