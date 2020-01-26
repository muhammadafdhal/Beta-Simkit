<?php

namespace App\Http\Controllers;

use App\spesialis;
use App\pasien;
use App\dokter;
use Illuminate\Http\Request;

class SpesialisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $spesialis = spesialis::join('dokters','dokters.dk_id','=','spesialis.sp_dk_id')
        ->join('pasiens','pasiens.ps_id','=','spesialis.sp_ps_id')->get();

        return view('spesialis.index', compact('spesialis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $spesialis = spesialis::join('dokters','dokters.dk_id','=','spesialis.sp_dk_id')
        ->join('pasiens','pasiens.ps_id','=','spesialis.sp_ps_id')->get();
        $dokter = dokter::all();
        $pasien = pasien::all();

        return view('spesialis.create', compact('spesialis','dokter','pasien'));
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
        $spesialis = new spesialis;
        $spesialis->sp_dk_id=$request['sp_dk_id'];
        $spesialis->sp_ps_id=$request['sp_ps_id'];

        $spesialis->save();
        return redirect('/spesialis');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function show(spesialis $spesialis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function edit(spesialis $spesialis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spesialis $spesialis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function destroy(spesialis $spesialis)
    {
        //
    }
}
