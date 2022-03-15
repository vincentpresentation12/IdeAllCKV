<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Formation;
use App\Models\Event;



class DashboardAdminController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $users = User::all();
        $formations = Formation::all();
        $events = Event::all();
        return view('dashboardadmin', compact('users', 'formations', 'events'), [
            $users = DB::table('users')->orderByDesc('id')->simplePaginate(4),
            $formations = DB::table('formations')->orderByDesc('startDate')->simplePaginate(4),
            $events = DB::table('events')->orderByDesc('startDate')->simplePaginate(2),
        ])
                ->with('users',$users,'formations',$formations,'events',$events);        
    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Models\Post  $Post

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('dashboardadmin')
                        ->with('success','Post deleted successfully');
    }
}