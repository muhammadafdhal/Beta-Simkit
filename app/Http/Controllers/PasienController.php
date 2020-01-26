<?php

namespace App\Http\Controllers;

use App\pasien;
use App\spesialis;
use App\dokter;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pasien = pasien::all();

        return view('pasien.index', compact('pasien'));
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

        return view('pasien.create', compact('pasien'));
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
        $pasien = new pasien;

        $pasien->ps_tgl_konsul=$request['ps_tgl_konsul'];
        $pasien->ps_nama=$request['ps_nama'];
        $pasien->ps_alamat=$request['ps_alamat'];
        $pasien->ps_keluhan=$request['ps_keluhan'];
        $pasien->ps_kt=$request['ps_kt'];
        $pasien->ps_status='Belum Ada Tindakan';
        $pasien->save();

        return redirect('/pasien');
    }

    public function rawat_jalan($id)
    {
        $rawat_jalan = pasien::find($id);
        $rawat_jalan->ps_status="Rawat jalan";
        $rawat_jalan->save();

        return redirect('/pasien');
    }

    public function pildok($id)
    {
        $spesialis = spesialis::join('dokters','dokters.dk_id','=','spesialis.sp_dk_id')
        ->join('pasiens','pasiens.ps_id','=','spesialis.sp_ps_id')
        ->where('sp_ps_id', $id)->get();
        // $dokter = dokter::all();
        $pasien = pasien::all();

        return view('pasien.pildok', compact('spesialis','dokter','pasien'));

        // $pildok = new spesialis;
        // $pildok->sp_ps_id=$id;
        // $pildok->save();
        
        // return redirect('/pasien');
    }

    public function isi_pildok($id)
    {
        $spesialis = new spesialis;
        $spesialis->sp_ps_id=$id;
        $spesialis->sp_dk_id=$request['sp_dk_id'];
        $spesialis->save();

        return redirect('/pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pasien $pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(pasien $pasien)
    {
        //
    }

    public function tampilan_pasien()
    {
        return view('utama');
    }

    public function daftar()
    {
        $pasien = pasien::all();

        return view('/pasien/pendaftaran',compact('pasien'));
    }

    public function konsultasi(Request $request)
    {
        //
        $pasien = new pasien;

        $pasien->ps_tgl_konsul=$request['ps_tgl_konsul'];
        $pasien->ps_waktu_konsul=$request['ps_waktu_konsul'];
        $pasien->ps_no=$request['ps_no'];
        $pasien->ps_nama=$request['ps_nama'];
        $pasien->ps_alamat=$request['ps_alamat'];
        $pasien->ps_keluhan=$request['ps_keluhan'];
        $pasien->ps_kt=$request['ps_kt'];
        $pasien->ps_status='Belum Ada Tindakan';
        $pasien->save();

        return redirect('/');
    }
}
