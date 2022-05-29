<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\data_kks;
use App\Models\kartu_keluarga_s;
use App\Models\kelahiran;
use App\Models\kematian;
use App\Models\ktp_s;
use App\Models\migrasi;
use App\Models\penduduk;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CCetak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakks = kartu_keluarga_s::where('status_kks', 1)->get();
        $datacetak = 'kks';

        return view('admin.va_cetak_kks', compact('datakks', 'datacetak'));
    }

    public function kkf()
    {
        $datakks = kematian::where('status_kem', 1)->get();
        $datacetak = 'kk';

        return view('admin.va_cetak_kks', compact('datakks', 'datacetak'));
    }

    public function kf()
    {
        $datakks = kelahiran::where('status_lahir', 1)->get();
        $datacetak = 'k';

        return view('admin.va_cetak_kks', compact('datakks', 'datacetak'));
    }

    public function ktpf()
    {
        $datakks = ktp_s::where('status_ktps', 1)->get();
        $datacetak = 'ktp';

        return view('admin.va_cetak_kks', compact('datakks', 'datacetak'));
    }

    public function mf()
    {
        $datakks = migrasi::where('status_migrasi', 1)->get();
        $datacetak = 'm';

        return view('admin.va_cetak_kks', compact('datakks', 'datacetak'));
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

    public function kks(Request $request)
    {
        $id = $request->id_penduduk;
        // $datapenduduk = data_kks::where('id_kks', $id)->get();
        $datapenduduk =  DB::table('data_kks')
            ->join('kartu_keluarga_s', 'kartu_keluarga_s.id', '=', 'data_kks.id_kks')
            ->join('penduduks', 'penduduks.id', '=', 'data_kks.id_penduduk_dkks')
            ->get();
        // dd($datapenduduk[0]->nama);
        $details = [
            'no' => 1,
            'nama' => $datapenduduk[0]->nama,
            'datapenduduk' => $datapenduduk
        ];

        $pdf = PDF::loadview('cetak/vc_kks', $details)->setPaper('a4', 'potrait');
        // return $pdf->download('surat-kk-sementara.pdf');
        return $pdf->stream();

        // return view('cetak/vc_kks');
    }

    public function k(Request $request)
    {
        $id = $request->id_penduduk;
        $datalahir = kelahiran::where('id', $id)->get();
        $id_penduduk = $datalahir[0]->id_penduduk;
        $datapenduduk = penduduk::where('id', $id_penduduk)->get();

        $details = [
            'nama_lahir' => $datalahir[0]->nama_lahir,
            'ttl_lahir' => $datalahir[0]->ttl_lahir,
            'jk_lahir' => $datalahir[0]->jk_lahir,
            'alamat_lahir' => $datalahir[0]->alamat_lahir,
            'ayah_lahir' => $datalahir[0]->ayah_lahir,
            'ibu_lahir' => $datalahir[0]->ibu_lahir,
            'anak_ke' => $datalahir[0]->anak_ke,
        ];


        $pdf = PDF::loadview('cetak/vc_k', $details)->setPaper('a4', 'potrait');
        // return $pdf->download('surat-kk-sementara.pdf');
        return $pdf->stream();

        // return view('cetak/vc_kks');
    }

    public function kk(Request $request)
    {
        $id = $request->id_penduduk;
        $datakem = kematian::where('id', $id)->get();
        $id_penduduk = $datakem[0]->id_penduduk;
        $datapenduduk = penduduk::where('id', $id_penduduk)->get();

        $details = [
            'nama_kem' => $datakem[0]->nama_kem,
            'jk_kem' => $datakem[0]->jk_kem,
            'alamat_kem' => $datakem[0]->alamat_kem,
            'umur_kem' => $datakem[0]->umur_kem,
            'hari' => $datakem[0]->hari,
            'tanggal' => date("d/m/Y", strtotime($datakem[0]->tanggal)),
            'tmpt_kem' => $datakem[0]->tmpt_kem,
            'penyebab' => $datakem[0]->penyebab,
            'hub_kem' => $datakem[0]->hub_kem,
            'nama_pelapor' => $datapenduduk[0]->nama,

        ];
        $pdf = PDF::loadview('cetak/vc_kk', $details);
        // return $pdf->download('surat-keterangan-kematian.pdf');
        return $pdf->stream();
        // return view('cetak/vc_kks');
    }

    public function ktp(Request $request)
    {
        $id = $request->id_penduduk;
        $dataktp = ktp_s::where('id', $id)->get();
        $id_penduduk = $dataktp[0]->id_penduduk;
        $datapenduduk = penduduk::where('id', $id_penduduk)->get();

        $details = [
            'nama' => $datapenduduk[0]->nama,
            'jenis_kelamin' => $datapenduduk[0]->jenis_kelamin,
            'tempat_lahir' => $datapenduduk[0]->tempat_lahir,
            'tanggal_lahir' => $datapenduduk[0]->tanggal_lahir,
            'agama' => $datapenduduk[0]->agama,
            'pendidikan' => $datapenduduk[0]->pendidikan,
            'status' => $datapenduduk[0]->status,
            'pekerjaan' => $datapenduduk[0]->pekerjaan,
            'nik' => $datapenduduk[0]->nik,
            'desa_ktps' => $dataktp[0]->desa_ktps,
            'kec_ktps' => $dataktp[0]->kec_ktps,
            'kab_ktps' => $dataktp[0]->kab_ktps,

        ];
        $pdf = PDF::loadview('cetak/vc_ktp', $details);
        // return $pdf->download('surat-keterangan-kematian.pdf');
        return $pdf->stream();
        // return view('cetak/vc_kks');
    }

    public function m(Request $request)
    {
        $id = $request->id_penduduk;
        $datam = migrasi::where('id', $id)->get();
        $id_penduduk = $datam[0]->id_penduduk;
        $datapenduduk = penduduk::where('id', $id_penduduk)->get();

        $details = [
            'nama' => $datapenduduk[0]->nama,
            'jenis_kelamin' => $datapenduduk[0]->jenis_kelamin,
            'tempat_lahir' => $datapenduduk[0]->tempat_lahir,
            'tanggal_lahir' => $datapenduduk[0]->tanggal_lahir,
            'kewarganegaraan' => $datapenduduk[0]->kewarganegaraan,
            'agama' => $datapenduduk[0]->agama,
            'status' => $datapenduduk[0]->status,
            'pendidikan' => $datapenduduk[0]->pendidikan,
            'ayah' => $datapenduduk[0]->ayah,
            'ibu' => $datapenduduk[0]->ibu,
            'alamat' => $datapenduduk[0]->alamat,
            'kk' => $datapenduduk[0]->kk,
            'status' => $datapenduduk[0]->status,
            'pekerjaan' => $datapenduduk[0]->pekerjaan,
            'nik' => $datapenduduk[0]->nik,
            'alamat_tujuan' => $datam[0]->alamat_tujuan,
            'desa_migrasi' => $datam[0]->desa_migrasi,
            'kec_migrasi' => $datam[0]->kec_migrasi,
            'kab_migrasi' => $datam[0]->kab_migrasi,
            'prov_migrasi' => $datam[0]->prov_migrasi,
            'tgl_migrasi' => $datam[0]->tgl_migrasi,
            'alasan_migrasi' => $datam[0]->alasan_migrasi,

        ];
        $pdf = PDF::loadview('cetak/vc_m', $details);
        // return $pdf->download('surat-keterangan-kematian.pdf');
        return $pdf->stream();
        // return view('cetak/vc_kks');
    }

    public function kksl(Request $request)
    {

        $datakksl =  DB::table('kartu_keluarga_s')
            ->join('penduduks', 'penduduks.id', '=', 'kartu_keluarga_s.id_penduduk')
            ->get();

        $details = [
            'no' => 1,
            'datakksl' => $datakksl,
            'nama_laporan' => 'KARTU KELUARGA'

        ];

        $pdf = PDF::loadview('cetak/vc_kksl', $details)->setPaper('a4', 'potrait');
        return $pdf->stream();
    }

    public function kl(Request $request)
    {
        $datakksl =  DB::table('kelahirans')
            ->join('penduduks', 'penduduks.id', '=', 'kelahirans.id_penduduk')
            ->get();
        $details = [
            'no' => 1,
            'datakksl' => $datakksl,
            'nama_laporan' => 'KELAHIRAN'
        ];

        $pdf = PDF::loadview('cetak/vc_kksl', $details)->setPaper('a4', 'potrait');
        return $pdf->stream();
    }

    public function kkl(Request $request)
    {
        $datakksl =  DB::table('kematians')
            ->join('penduduks', 'penduduks.id', '=', 'kematians.id_penduduk')
            ->get();
        $details = [
            'no' => 1,
            'datakksl' => $datakksl,
            'nama_laporan' => 'KEMATIAN'
        ];

        $pdf = PDF::loadview('cetak/vc_kksl', $details)->setPaper('a4', 'potrait');
        return $pdf->stream();
    }

    public function ml(Request $request)
    {
        $datakksl =  DB::table('migrasis')
            ->join('penduduks', 'penduduks.id', '=', 'migrasis.id_penduduk')
            ->get();
        $details = [
            'no' => 1,
            'datakksl' => $datakksl,
            'nama_laporan' => 'PINDAH / PENDATANG'
        ];

        $pdf = PDF::loadview('cetak/vc_kksl', $details)->setPaper('a4', 'potrait');
        return $pdf->stream();
    }

    public function ktpl(Request $request)
    {
        $datakksl =  DB::table('ktp_s')
            ->join('penduduks', 'penduduks.id', '=', 'ktp_s.id_penduduk')
            ->get();
        $details = [
            'no' => 1,
            'datakksl' => $datakksl,
            'nama_laporan' => 'KARTU TANDA PENDUDUK'
        ];

        $pdf = PDF::loadview('cetak/vc_kksl', $details)->setPaper('a4', 'potrait');
        return $pdf->stream();
    }
}
