<?php

namespace App\Http\Controllers;


use App\Models\Event;
use App\Models\User;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class EventController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $events = Event::all();
        return view('admin.event.index')
                ->with('events',$events);
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        $users = User::all();
        $formations = Formation::all();
        return view('admin.event.create', compact('users', 'formations'));
    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {


        $event = new Event([
            'nameEvent' => $request->get('nameEvent'),
            'startDate' => $request->get('startDate'),
            'endDate' => $request->get('endDate'),
            'nbAnimNeed' => $request->get('nbAnimNeed'),
            'nbAnimSub' => 0,
            'nbParticipant' => 0,
            'companyName' => $request->get('companyName'),
            'descrEvent' => $request->get('descrEvent'),
            'type' => $request->get('type'),
            'langue' => $request->get('langue'),
            'idAnimModo' => $request->get('idAnimModo', null),
            'idFormation' => $request->get('idFormation', null)
        ]);

        $event->save();

        return redirect('adminevent')
                        ->with('success','event created successfully.');
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
        $formations = Formation::where('formations.id', $events->idFormation)->get();
        return view('admin.event.show', compact('events', 'modos', 'formations'));
    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Models\Event  $post

     * @return \Illuminate\Http\Response

     */

    public function edit($id)
    {
        $events = Event::find($id);
        $modos = User::where('users.id',$events->idAnimModo)->get();
        $users = User::all();
        $currentFormations = Formation::where('formations.id',$events->idFormation)->get();
        $formations = Formation::all();
        return view('admin.event.edit', compact('events', 'modos', 'users', 'currentFormations', 'formations'));
    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Models\Event  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)
    {

        $post = Event::find($id);
        $input = $request->all();
        $post->update($input);

        return redirect('adminevent')
                        ->with('success','event updated successfully');
    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Models\Post  $Post

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('adminevent')
                        ->with('success','Post deleted successfully');
    }

}