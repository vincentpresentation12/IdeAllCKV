<?php

namespace App\Http\Controllers;


use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class EventAnimateurController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $events = Event::all();
        return view('animateur.event.index')
                ->with('events',$events);
    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Models\Event  $Post

     * @return \Illuminate\Http\Response

     */

    public function show($id)
    {
        $events = Event::find($id);
        $modos = User::where('users.id',$events->idAnimModo)->get();
        return view('animateur.event.show', compact('events', 'modos'));
    }
}