<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\migrasi;
use Illuminate\Http\Request;
use App\Models\penduduk;
use Yajra\DataTables\DataTables;


class CAKeterangan_pindah_penduduk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = penduduk::all();

        if (request()->ajax()) {
            return Datatables::of(migrasi::all())->addIndexColumn()->addColumn('aksi', function ($data) {
                $dataj = json_encode($data);

                $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>
                <button type='button' data-toggle='modal' onclick='update(" . $data->id . ")'   class='btn btn-success btn-xs mb-1'>Terima</button>
                <button type='button' data-toggle='modal' onclick='updatedua(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Tolak</button>
                <button type='button' data-toggle='modal' onclick='hapus(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Hapus</button>
                </li>

                </ul>";
                return $btn;
            })->addColumn('nama', function ($data) {
                $btn = $data->penduduk->nama;
                return $btn;
            })->addColumn('nik', function ($data) {
                $btn = $data->penduduk->nik;
                return $btn;
            })->addColumn('jenis_kelamin', function ($data) {
                $btn = $data->penduduk->jenis_kelamin;
                return $btn;
            })->rawColumns(['aksi', 'nama', 'nik'])->make(true);
        }
        return view('admin.va_m', compact('penduduk'));
    }

    public function mk()
    {
        $penduduk = penduduk::all();

        if (request()->ajax()) {
            return Datatables::of(migrasi::all())->addIndexColumn()->addColumn('aksi', function ($data) {
                $dataj = json_encode($data);

                $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>
                <button type='button' data-toggle='modal' onclick='update(" . $data->id . ")'   class='btn btn-success btn-xs mb-1'>Terima</button>
                <button type='button' data-toggle='modal' onclick='updatedua(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Tolak</button>
                <button type='button' data-toggle='modal' onclick='hapus(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Hapus</button>
                </li>

                </ul>";
                return $btn;
            })->addColumn('nama', function ($data) {
                $btn = $data->penduduk->nama;
                return $btn;
            })->addColumn('nik', function ($data) {
                $btn = $data->penduduk->nik;
                return $btn;
            })->addColumn('jenis_kelamin', function ($data) {
                $btn = $data->penduduk->jenis_kelamin;
                return $btn;
            })->rawColumns(['aksi', 'nama', 'nik'])->make(true);
        }
        return view('admin.va_mk', compact('penduduk'));
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
        migrasi::create([
            "id_penduduk" => $request->id_penduduk,
            "alamat_tujuan" => $request->alamat_tujuan,
            "jumlah_pindah" => 1,
            "status_migrasi" => 0,
            "desa_migrasi" => $request->desa_migrasi,
            "kec_migrasi" => $request->kec_migrasi,
            "kab_migrasi" => $request->kab_migrasi,
            "prov_migrasi" => $request->prov_migrasi,
            "alasan_migrasi" => $request->alasan_migrasi,
            "tgl_migrasi" => $request->tgl_migrasi,
            "jenis_migrasi" => $request->jenis_migrasi,
        ]);
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
        migrasi::where('id', $id)
            ->update([
                'status_migrasi' => 1,
            ]);
        $return = array(
            'status'    => true,
            'message'    => 'Data berhasil diupdate..',
        );
        return response()->json($return);
    }

    public function edit_dua($id)
    {
        migrasi::where('id', $id)
            ->update([
                'status_migrasi' => 2,
            ]);
        $return = array(
            'status'    => true,
            'message'    => 'Data berhasil diupdate..',
        );
        return response()->json($return);
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
        $res = migrasi::findOrFail($id);
        if ($res == null) {
            return false;
        }
        $res->delete();
        return true;
    }
}
