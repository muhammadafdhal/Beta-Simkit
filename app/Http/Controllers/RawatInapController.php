<?php

namespace App\Http\Controllers;

use App\rawat_inap;
use App\pasien;
use App\user;
use App\ruangan;
use App\pembayaran;
use Illuminate\Http\Request;

class RawatInapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rawat_inap = rawat_inap::join('pasiens','pasiens.ps_id','=','rawat_inaps.ri_ps_id')
        ->join('ruangans','ruangans.rg_id','=','rawat_inaps.ri_rg_id')
        ->join('users','users.id','=','rawat_inaps.ri_petugas_id')->get();

        return view('rawat_inap.index', compact('rawat_inap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pasien = pasien::all();
        $ruangan = ruangan::all();
        $petugas = user::where('us_kategori','=','petugas')->get();
        $rawat_inap = rawat_inap::join('pasiens','pasiens.ps_id','=','rawat_inaps.ri_ps_id')
        ->join('ruangans','ruangans.rg_id','=','rawat_inaps.ri_rg_id')
        ->join('users','users.id','=','rawat_inaps.ri_petugas_id')->get();

        return view('rawat_inap.create', compact('rawat_inap','pasien','ruangan','petugas'));
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
        $rawat_inap = new rawat_inap;
        $rawat_inap->ri_rg_id=$request['ri_rg_id'];
        $rawat_inap->ri_ps_id=$request['ri_ps_id'];
        $rawat_inap->ri_petugas_id=$request['ri_petugas_id'];
        $rawat_inap->ri_status="ada";

        $rawat_inap->save();
        return redirect('/rawat_inap');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rawat_inap  $rawat_inap
     * @return \Illuminate\Http\Response
     */
    public function show(rawat_inap $rawat_inap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rawat_inap  $rawat_inap
     * @return \Illuminate\Http\Response
     */
    public function edit(rawat_inap $rawat_inap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rawat_inap  $rawat_inap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rawat_inap $rawat_inap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rawat_inap  $rawat_inap
     * @return \Illuminate\Http\Response
     */
    public function destroy( $rawat_inap)
    {
        //
    }

    public function keluar($id)
    {
        $rawat_inap = rawat_inap::find($id);
        $rawat_inap->ri_status="keluar";
        $rawat_inap->save();
        $pembayaran = new pembayaran;
        $pembayaran->pb_ps_id=$id;
        $pembayaran->save();

        return redirect('rawat_inap');
    }
}
