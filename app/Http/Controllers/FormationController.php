<?php

namespace App\Http\Controllers;


use App\Models\Formation;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class FormationController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $formations = Formation::all();
        return view('admin.formation.index')
                ->with('formations',$formations);
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        $activities = Activity::all();
        return view('admin.formation.create', compact('activities'));
    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
        $formations= new Formation([
            'title' => $request->get('title'),
            'descrFormations'=> $request->get('descrFormations'),
            'startDate'=> $request->get('startDate'),
            'endDate'=> $request->get('endDate'),
            'type'=> $request->get('type'),
            'langue' => $request->get('langue'),
            'idActivity'=> $request->get('idActivity', null)
        ]);

        $formations->save();

        return redirect('adminformation')
                        ->with('success','formation created successfully.');
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
        $activities = Activity::where('activity.id',$formations->idActivity)->get();
        return view('admin.formation.show', compact('formations', 'activities'));
    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Models\Formation  $post

     * @return \Illuminate\Http\Response

     */

    public function edit($id)
    {
        $formations = Formation::find($id);
        $activities = Activity::all();
        $currentActivities = Activity::where('activity.id',$formations->idActivity)->get();
        return view('admin.formation.edit', compact('formations', 'activities', 'currentActivities'));
    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Models\Formation  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)
    {

        $post = Formation::find($id);
        $input = $request->all();
        $post->update($input);

        return redirect('adminformation')
                        ->with('success','formation updated successfully');
    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Models\Post  $Post

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)
    {
        Formation::destroy($id);
        return redirect('adminformation')
                        ->with('success','Post deleted successfully');
    }

}