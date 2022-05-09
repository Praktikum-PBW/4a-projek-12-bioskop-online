<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Transaction::all();
        // dd($data);
        return view('transaction.index', compact('data'), [

            "title" => "Transaction"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('film.show', [
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
        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->tgl = $request->tgl;
        $transaction->film = $request->film;
        $transaction->studio = $request->studio;
        $transaction->jam = $request->jam;
        $transaction->jml_ticket = $request->jml_ticket;
        $transaction->no_kursi = json_encode($request->no_kursi);
        $transaction->harga = $request->harga;
        $transaction->total2 = $request->total2;
        $transaction->save();

        // Transaction::create($validateddata);
        return redirect('/user/myticket');
    }

    public function myticket()
    {
        $data = Transaction::all();
        return  view('user.myticket', compact('data'), [
            'myticket' => $data = Transaction::where('user_id', Auth::user()->id)->get(),
            'title' => "My Ticket",
        ]);
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
    public function edit(Request $request, $id)
    {
        $data = Film::find($id);

        return view('transaction.edit', compact('data'), [
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
        $data = Transaction::find($id);
        $data->delete();
        return redirect('/transaction')->with('success', 'Data Berhasil Di Hapus');
    }
}