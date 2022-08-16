<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'umur' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());

        // session(['userID' => User::orderBy('id', 'asc')->value('id')]);
        $request->session()->put('userID', User::orderBy('id', 'desc')->value('id'));
        return redirect('/flight');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $userLogin = User::where('email', '=', $request->email)->first();

        if (!$userLogin){
            return back()->with('status', 'Username tidak dikenali.');
        }
        else{
            $password = DB::table('users')
            ->where('users.email', '=', $userLogin->email)
            ->first();
            if($password->password == $request->password){
                $request->session()->put('userID', $userLogin->id);
                return redirect('/flight');
            }
            else{
                return back()->with('status', 'Password yang dimasukkan salah.');
            }
        }
    }

    public function logout()
    {
        if(session()->has('userID')){
            session()->pull('userID');
            return redirect('/');
        }
        return back();
    }
}
