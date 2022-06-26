<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\penduduk;
use App\Models\kartu_keluarga_s;
use App\Models\kelahiran;
use App\Models\kematian;
use App\Models\notif;

class CADashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = penduduk::all();
        $kks = kartu_keluarga_s::all();
        $laki = penduduk::where('jenis_kelamin', 'laki-laki')->get();
        $perempuan = penduduk::where('jenis_kelamin', 'perempuan')->get();
        $lahir = kelahiran::all();
        $kematian = kematian::all();
        $nlaki = count($laki);
        $nperempuan = count($perempuan);
        $nlahir = count($lahir);
        $nkematian = count($kematian);

        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);

        $npenduduk = count($penduduk);
        $nkks = count($kks);
        // dd($nkks);
        return view('admin.va_utama', compact('nkks', 'npenduduk', 'nlaki', 'nperempuan', 'nlahir', 'nkematian', 'nnotif', 'notif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
