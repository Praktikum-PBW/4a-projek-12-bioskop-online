<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Film::all();
        // dd($data);
        return view('admin.film.index', compact('data'), [
            "title" => "Film"
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.film.create', [
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
        $data = Film::create($request->all());
        if ($request->hasFile('poster')) {
            $request->file('poster')->move('posterfilm/', $request->file('poster')->getClientOriginalName());
            $data->poster = $request->file('poster')->getClientOriginalName();
            $data->save();
        }
        return redirect('/film')->with('success', 'Task Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Film::all();
        // dump($data);
        return view('film.index', compact('data'), [
            'title' => "Movie",
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Film::find($id);
        if ($request->hasFile('poster')) {
            $request->file('poster')->move('posterfilm/', $request->file('poster')->getClientOriginalName());
            $data->poster = $request->file('poster')->getClientOriginalName();
            $data->save();
        }
        return view('admin.film.edit', compact('data'), [
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
        $data = Film::find($id);
        if ($request->hasFile('poster')) {
            $request->file('poster')->move('posterfilm/', $request->file('poster')->getClientOriginalName());
            $data->poster = $request->file('poster')->getClientOriginalName();
            $data->save();
        }
        $data->update($request->all());

        return redirect('/film')->with('success', 'Data Berhasil Di Update');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Film::find($id);
        $data->delete();
        return redirect('/film')->with('success', 'Data Berhasil Di Hapus');
    }
}