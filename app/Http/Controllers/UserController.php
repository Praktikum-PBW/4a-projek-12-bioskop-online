<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryCommand;
use Illuminate\Support\Facades\Auth;
use App\Models\Film;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $data = User::all();
        // dd($data);
        return view('user.index', compact('data'), [
            "title" => "User"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        // dd($request->all());

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->level == 'Admin') {
                return redirect('dashboard');
            } elseif (Auth::user()->level == 'Customer') {
                return redirect('/');
            }
        }
        return redirect('/login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function regis()
    {
        return view('user.signup', [
            "title" => "Signup"
        ]);
    }

    public function postRegis(Request $request)
    {
        // dd($request->all());
        $validateddata = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'level' => 'nullable|default'
        ]);
        $validateddata['password'] = bcrypt($validateddata['password']);
        User::create($validateddata);
        return redirect('/login')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function create()
    {
        return view('user.create', [
            "title" => "Create"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validateddata = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'level' => 'required|max:255'
        ]);
        $validateddata['password'] = bcrypt($validateddata['password']);
        User::create($validateddata);
        return redirect('/user')->with('success', 'Data Berhasil Ditambahkan');
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
        $data = User::find($id);
        // dd($data);
        return view('user.edit', compact('data'), [
            "title" => "Edit"
        ]);
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
        $data = User::find($id);
        $data->update($request->all());

        return redirect('/user')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/user')->with('success', 'Data Berhasil Di Hapus');
    }
}