<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Formation;
use App\Models\Event;
use Illuminate\Cache\RateLimiting\Limit;

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
        $formations = Formation::all()->sortBy("startDate")->forPage(1,3);
        $events = Event::all()->sortBy("startDate")->forPage(1,2);
        return view('dashboardadmin', compact('users', 'formations', 'events'), [
            $users = DB::table('users')->orderByDesc('id')->Paginate(4),
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
        Event::destroy($id);
        Formation::destroy($id);
        return redirect('admin')
                        ->with('success','Post deleted successfully');
    }
}