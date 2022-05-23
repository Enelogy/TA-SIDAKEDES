<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\data_kks;
use App\Models\kartu_keluarga_s;
use App\Models\penduduk;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CKartu_keluarga_s extends Controller
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
            return Datatables::of(kartu_keluarga_s::all())->addIndexColumn()->addColumn('aksi', function ($data) {
                $dataj = json_encode($data);

                $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>
                <button type='button' data-toggle='modal' onclick='update(" . $data->id . ")'   class='btn btn-success btn-xs mb-1'>Terima</button>
                <button type='button' data-toggle='modal' onclick='updatedua(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Tolak</button>
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
        return view('admin.va_kks', compact('penduduk'));
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
        $datakks  = kartu_keluarga_s::create([
            "id_penduduk" => $request->id_penduduk,
            "status_kks" => 0,
        ]);

        data_kks::create([
            "id_kks" => $datakks->id,
            "id_penduduk_dkks" =>  $request->id_penduduk,
        ]);

        data_kks::create([
            "id_kks" => $datakks->id,
            "id_penduduk_dkks" =>  $request->id_pendudukdua,
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
        kartu_keluarga_s::where('id', $id)
            ->update([
                'status_kks' => 1,
            ]);
        $return = array(
            'status'    => true,
            'message'    => 'Data berhasil diupdate..',
        );
        return response()->json($return);
    }

    public function edit_dua($id)
    {
        kartu_keluarga_s::where('id', $id)
            ->update([
                'status_kks' => 2,
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
        // $request = kartu_keluarga_s::where('id', $request->id)
        //     ->update([
        //         'status_kks' => $request->status_kks,
        //     ]);
        // // return redirect()->back();
        // $return = array(
        //     'status'    => true,
        //     'message'    => 'Data berhasil diupdate..',
        // );
        // return response()->json($return);
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
