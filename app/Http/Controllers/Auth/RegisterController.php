<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return view('admin.create', User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]));
    }

    public function show(User $user)
    {
        //
        return view('admin.show',compact('user'));
    }


    public function index()

    {

        $user = User::latest()->get();



        return view('admin.index',compact('user'))

                ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function store(Request $request)

    {

        $request->validate([

            'firstname' => 'required',

            'lastname' => 'required',

        ]);

        User::create($request->all());

        return redirect()->route('admin.show')

                        ->with('success','Post created successfully.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(User $request,$id)
    {
        //

        $request->validate([
            'firstName'=>'required',
            'lastName'=> 'required',
        ]);


        $user = User::find($id);
        $user->first_name = $request->get('firstName');
        $user->last_name = $request->get('lastName');

        $user->update();

        return redirect('/user')->with('success', `Modificatiopn de l'animateur`);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect('/admin')->with('success', 'Student deleted successfully');
    }
}
