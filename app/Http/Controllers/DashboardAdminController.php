<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\DB;



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
        return view('dashboardadmin', [
            $users = DB::table('users')->simplePaginate(4)
        ])
                ->with('users',$users);

           
                
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