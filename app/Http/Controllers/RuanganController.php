<?php

namespace App\Http\Controllers;

use App\ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ruangan = ruangan::all();

        return view('ruangan.index', compact('ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ruangan = ruangan::all();

        return view('ruangan.create', compact('ruangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ruangan = new ruangan;
        $ruangan->rg_nama=$request['rg_nama'];
        $ruangan->rg_status=$request['rg_status'];
        $ruangan->rg_gedung=$request['rg_gedung'];

        $ruangan->save();

        return redirect('/ruangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit( $ruangan)
    {
        //
        $ruangan = ruangan::find($ruangan);

        return view('ruangan.edit', compact('ruangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $ruangan)
    {
        //
        $ruangan = ruangan::find($ruangan);
        $ruangan->rg_nama=$request['rg_nama'];
        $ruangan->rg_status=$request['rg_status'];
        $ruangan->rg_gedung=$request['rg_gedung'];

        $ruangan->save();

        return redirect('/ruangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy( $ruangan)
    {
        //
        $ruangan = ruangan::find($ruangan);
        $ruangan->delete();

        return redirect('/ruangan');
    }
}
