<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kematian;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\penduduk;
use App\Models\s_kematian;
use App\Models\s_pendatang;
use App\Models\s_pindah;
use Illuminate\Support\Facades\DB;
use App\Models\notif;

class CASirkulasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);

        $penduduk = penduduk::where('status_p', 0)->get();
        if (request()->ajax()) {
            return Datatables::of(penduduk::where('status_p', 2)->get())->addIndexColumn()->addColumn('aksi', function ($data) {
                $dataj = json_encode($data);

                $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>
                <button type='button' data-toggle='modal' onclick='staffdel(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Hapus</button>
                </li>

                </ul>";

                return $btn;
            })->rawColumns(['aksi'])->make(true);
        }
        return view('admin.sirkulasi.vas_kelahiran', compact('penduduk', 'notif', 'nnotif'));
    }

    public function kematian()
    {
        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);
        $penduduk = penduduk::where('status_p', 0)->get();

        if (request()->ajax()) {
            return Datatables::of(s_kematian::all())->addIndexColumn()->addColumn('aksi', function ($data) {
                $dataj = json_encode($data);

                $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>
                <button type='button' data-toggle='modal' onclick='staffdel(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Hapus</button>
                </li>

                </ul>";

                return $btn;
            })->addColumn('nama', function ($data) {
                $dataj = json_encode($data);

                $btn = $data->penduduk->nama;

                return $btn;
            })->addColumn('jenis_kelamin', function ($data) {
                $dataj = json_encode($data);

                $btn = $data->penduduk->jenis_kelamin;

                return $btn;
            })->rawColumns(['aksi', 'nama', 'jenis_kelamin'])->make(true);
        }
        return view('admin.sirkulasi.vas_kematian', compact('penduduk', 'notif', 'nnotif'));
    }

    public function pindah()
    {
        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);
        $penduduk = penduduk::where('status_p', 0)->get();

        if (request()->ajax()) {
            return Datatables::of(s_pindah::all())->addIndexColumn()->addColumn('aksi', function ($data) {
                $dataj = json_encode($data);

                $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>
                <button type='button' data-toggle='modal' onclick='staffdel(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Hapus</button>
                </li>

                </ul>";

                return $btn;
            })->addColumn('nama', function ($data) {
                $dataj = json_encode($data);

                $btn = $data->penduduk->nama;

                return $btn;
            })->addColumn('jenis_kelamin', function ($data) {
                $dataj = json_encode($data);

                $btn = $data->penduduk->jenis_kelamin;

                return $btn;
            })->rawColumns(['aksi', 'nama', 'jenis_kelamin'])->make(true);
        }
        return view('admin.sirkulasi.vas_pindah', compact('penduduk', 'notif', 'nnotif'));
    }

    public function pendatang()
    {
        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);
        $penduduk = penduduk::where('status_p', 0)->get();

        if (request()->ajax()) {
            return Datatables::of(s_pendatang::all())->addIndexColumn()->addColumn('aksi', function ($data) {
                $dataj = json_encode($data);

                $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>
                <button type='button' data-toggle='modal' onclick='staffdel(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Hapus</button>
                </li>

                </ul>";

                return $btn;
            })->addColumn('nama', function ($data) {
                $dataj = json_encode($data);

                $btn = $data->penduduk->nama;

                return $btn;
            })->addColumn('jenis_kelamin', function ($data) {
                $dataj = json_encode($data);

                $btn = $data->penduduk->jenis_kelamin;

                return $btn;
            })->rawColumns(['aksi', 'nama', 'jenis_kelamin'])->make(true);
        }
        return view('admin.sirkulasi.vas_pendatang', compact('penduduk', 'notif', 'nnotif'));
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

    public function tambahk(Request $request)
    {
        $id_penduduk = $request->id_penduduk;

        penduduk::where('id', $id_penduduk)
            ->update(['status_p' => 2]);


        $return = array(
            'status'    => true,
            'message'    => 'Data berhasil disimpan..',
        );

        return response()->json($return);
    }

    public function tambahkem(Request $request)
    {
        $id_penduduk = $request->id_penduduk;

        s_kematian::create([
            "id_penduduk" => $request->id_penduduk,
            "tgl_sk" => $request->tgl_sk,
            "sebab_sk" => $request->sebab_sk,
        ]);

        penduduk::where('id', $id_penduduk)
            ->update(['status_p' => 3]);

        $return = array(
            'status'    => true,
            'message'    => 'Data berhasil disimpan..',
        );

        return response()->json($return);
    }

    public function tambahpin(Request $request)
    {
        $id_penduduk = $request->id_penduduk;

        s_pindah::create([
            "id_penduduk" => $request->id_penduduk,
            "tgl_pindah" => $request->tgl_pindah,
            "alasan_sp" => $request->alasan_sp,
        ]);

        penduduk::where('id', $id_penduduk)
            ->update(['status_p' => 1]);

        $return = array(
            'status'    => true,
            'message'    => 'Data berhasil disimpan..',
        );

        return response()->json($return);
    }

    public function tambahpen(Request $request)
    {
        $id_penduduk = $request->id_penduduk;

        s_pendatang::create([
            "id_penduduk" => $request->id_penduduk,
            "tgl_datang" => $request->tgl_datang,
            "pelapor" => $request->pelapor,
        ]);

        penduduk::where('id', $id_penduduk)
            ->update(['status_p' => 4]);

        $return = array(
            'status'    => true,
            'message'    => 'Data berhasil disimpan..',
        );

        return response()->json($return);
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
