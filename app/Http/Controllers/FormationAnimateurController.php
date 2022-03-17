<?php

namespace App\Http\Controllers;


use App\Models\Formation;
use Illuminate\Http\Request;


class FormationAnimateurController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $formations = Formation::all();
        return view('animateur.formation.index')
                ->with('formations',$formations);
    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Models\Formation  $Post

     * @return \Illuminate\Http\Response

     */

    public function show($id)
    {
        $formations = Formation::find($id);
        return view('animateur.formation.show')->with('formations',$formations);
    }

}