<?php

namespace App\Http\Controllers;

use App\dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dokter = dokter::all();

        return view('dokter.index', compact('dokter'));
    }

    public function spesialis($spesialis)
    {
        $dokter = dokter::where('dk_spesialis',$spesialis)->get();

        return view('dokter.index', compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dokter = dokter::all();

        return view('dokter.create', compact('dokter'));
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
        $dokter = new dokter;
        $dokter->dk_nama=$request['dk_nama'];
        $dokter->dk_alamat=$request['dk_alamat'];
        $dokter->dk_spesialis=$request['dk_spesialis'];
        
        $dokter->save();

        return redirect('/dokter')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($dokter)
    {
        //
        $dokter = dokter::find($dokter);
        

        return view('dokter.edit', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dokter)
    {
        //
        $dokter = dokter::find($dokter);
        $dokter->dk_nama=$request['dk_nama'];
        $dokter->dk_alamat=$request['dk_alamat'];
        $dokter->dk_spesialis=$request['dk_spesialis'];
        $dokter->save();

        return redirect('/dokter');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(dokter $dokter)
    {
        //
        $dokter = dokter::find($dokter);
        $dokter->delete();
        return redirect('/dokter')->with('success', 'Berhasil Menghapus Data');
    }
}
