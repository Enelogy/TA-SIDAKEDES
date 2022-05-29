<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kelahiran;
use Illuminate\Http\Request;
use App\Models\penduduk;
use Yajra\DataTables\DataTables;

class CAKelahiran extends Controller
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
            return Datatables::of(kelahiran::all())->addIndexColumn()->addColumn('aksi', function ($data) {
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
            })->addColumn('tempat_lahir', function ($data) {
                $tempat = $data->penduduk->tempat_lahir;
                return $tempat;
            })->addColumn('tanggal_lahir', function ($data) {
                $tempat = $data->penduduk->tanggal_lahir;
                return $tempat;
            })->rawColumns(['aksi', 'nama', 'nik', 'tempat_lahir', 'tanggal_lahir'])->make(true);
        }
        return view('admin.va_kelahiran', compact('penduduk'));
    }

    public function kk()
    {
        $penduduk = penduduk::all();

        if (request()->ajax()) {
            return Datatables::of(kelahiran::all())->addIndexColumn()->addColumn('aksi', function ($data) {
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
            })->addColumn('tempat_lahir', function ($data) {
                $tempat = $data->penduduk->tempat_lahir;
                return $tempat;
            })->addColumn('tanggal_lahir', function ($data) {
                $tempat = $data->penduduk->tanggal_lahir;
                return $tempat;
            })->rawColumns(['aksi', 'nama', 'nik', 'tempat_lahir', 'tanggal_lahir'])->make(true);
        }
        return view('admin.va_kelahirank', compact('penduduk'));
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
        kelahiran::create([
            "id_penduduk" => $request->id_penduduk,
            "anak_ke" => $request->anak_ke,
            "nama_lahir" => $request->nama_lahir,
            "ttl_lahir" => $request->ttl_lahir,
            "jk_lahir" => $request->jk_lahir,
            "alamat_lahir" => $request->alamat_lahir,
            "ayah_lahir" => $request->ayah_lahir,
            "ibu_lahir" => $request->ibu_lahir,
            "status_lahir" => 0,
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
        kelahiran::where('id', $id)
            ->update([
                'status_lahir' => 1,
            ]);
        $return = array(
            'status'    => true,
            'message'    => 'Data berhasil diupdate..',
        );
        return response()->json($return);
    }


    public function edit_dua($id)
    {
        kelahiran::where('id', $id)
            ->update([
                'status_lahir' => 2,
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
        $res = kelahiran::findOrFail($id);
        if ($res == null) {
            return false;
        }
        $res->delete();
        return true;
    }
}
