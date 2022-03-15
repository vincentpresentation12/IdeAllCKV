<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

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
        return view('admin.event.create');
    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
        $request->validate([
        'nameEvent'=>'required',
        'startDate'=>'nullable',
        'endDate'=>'nullable',
        'nbAnimNeed'=>'required',
        'companyName'=>'required',
        'descrEvent'=>'required',
        'type'=>'required'
        ]);

        $event = new Event([
            'nameEvent' => $request->get('nameEvent'),
            'startDate' => $request->get('startdate'),
            'endDate' => $request->get('endDate'),
            'nbAnimNeed' => $request->get('nbAnimNeed'),
            'companyName' => $request->get('companyName'),
            'descrEvent' => $request->get('descrEvent'),
            'isOpen' => false,
            'type' => $request->get('type')
        ]);

        $event->save();

        return redirect('adminevents')
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
        return view('admin.event.show')->with('events',$events);
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
        return view('admin.event.edit')->with('events',$events);
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

        return redirect('adminevents')
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
        return redirect('adminevents')
                        ->with('success','Post deleted successfully');
    }

}