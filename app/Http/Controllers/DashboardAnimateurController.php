<?php

namespace App\Http\Controllers;


use App\Models\Formation;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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



   /* public function update(Request $request, $id){

        $post = DB::table('user_event')->update(
            ['IdUser'=> Auth::user()->id->where('id','=',$id)],
            ['IdEvent'=> Event::all()->where('id' ,'=', $id)]
        );
        $input = $request->all();
        $post->update($input);

        return redirect('adminformation')
                        ->with('success','formation updated successfully');
    }*/

}