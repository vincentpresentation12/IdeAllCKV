<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $users = User::all();
        return view('admin.user.index')
                ->with('users',$users);
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        return view('admin.user.create');
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
            'firstname'=>'required',
            'lastname'=> 'required',
            'email' => 'required'
        ]);

        $user = new User([
            'firstname' => $request->get('firstname'),
            'lastname'=> $request->get('lastname'),
            'email'=> $request->get('email'),
            'password'=> Hash::make('password'),
            'team'=> $request->get('team'),
        ]);

        $user->save();

        return redirect('adminuser')
                        ->with('success','user created successfully.');
    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Models\User  $Post

     * @return \Illuminate\Http\Response

     */

    public function show($id)
    {
        $users = User::find($id);
        return view('admin.user.show')->with('users',$users);
    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Models\User  $post

     * @return \Illuminate\Http\Response

     */

    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.user.edit')->with('users',$users);
    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Models\User  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)
    {

        $post = User::find($id);
        $input = $request->all();
        $post->update($input);

        return redirect('adminuser')
                        ->with('success','user updated successfully');
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
        return redirect('adminuser')
                        ->with('success','Post deleted successfully');
    }

}