<?php

namespace App\Http\Controllers;


use App\Models\Formation;
use App\Models\Event;


class DashboardAnimateurController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $formations = Formation::all()->sortBy("startDate")->forPage(1,4);
        $events = Event::all()->sortBy("startDate")->forPage(1,3);
        return view('dashboardanimateur', compact('formations', 'events'))
    
                ->with('formations',$formations,'events',$events);        
    }

}