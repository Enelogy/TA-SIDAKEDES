<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kk;
use App\Models\penduduk;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\notif;




class CPenduduk extends Controller
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

        if (request()->ajax()) {
            return Datatables::of(
                penduduk::where('status_p', 0)->orwhere('status_p', 2)->orwhere('status_p', 4)->get()
            )
                ->addIndexColumn()->addColumn('aksi', function ($data) {
                    $dataj = json_encode($data);

                    $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>
                <button type='button' data-toggle='modal' onclick='staffedit(" . $dataj . ")'   class='btn btn-primary btn-xs mb-1'>Edit</button>
                <button type='button' data-toggle='modal' onclick='hapus(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Hapus</button>
                </li>

                </ul>";

                    return $btn;
                })->rawColumns(['aksi'])->make(true);
        }
        return view('admin.va_datap', compact('notif', 'nnotif'));
    }

    public function kk()
    {
        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);
        if (request()->ajax()) {
            return Datatables::of(kk::all())->addIndexColumn()->addColumn('aksi', function ($data) {
                $dataj = json_encode($data);

                $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>

                <a href='/admin/data-penduduk-kk/" . $data->no_kk . "' class='btn btn-primary btn-sm'>Lihat</a>
                </li>

                </ul>";
                return $btn;
            })->rawColumns(['aksi'])->make(true);
        }
        return view('admin.va_datapdua', compact('notif', 'nnotif'));
    }

    public function kkdetail($id)
    {
        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);
        $id_kk = $id;
        if (request()->ajax()) {
            return Datatables::of(penduduk::where('kk', $id)->get())->addIndexColumn()->addColumn('aksi', function ($data) {
                $dataj = json_encode($data);

                $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>
                <button type='button' data-toggle='modal' onclick='staffdel(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Hapus</button>
                </li>

                </ul>";

                return $btn;
            })->rawColumns(['aksi'])->make(true);
        }
        return view('admin.va_dataptiga', compact('id_kk', 'notif', 'nnotif'));
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
        // if ($request->id_p == '') {
        //     dd($request);
        // } else {
        //     dd($request);
        // }
        $penduduk = penduduk::create([
            'nik' => $request->nik,
            'kk' => $request->kk,
            'nama' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kepala_keluarga' => $request->kepala_keluarga,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pendidikan' => $request->pendidikan,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'status' => $request->statuss,
            'pekerjaan' => $request->pekerjaan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'ayah' => $request->ayah,
            'ibu' => $request->ibu,
        ]);
        $datakk = kk::where('no_kk', $request->kk)->get()->count();
        if ($datakk == 0) {
            kk::create([
                'no_kk' => $request->kk,
                'id_p' => 1,

            ]);
            $return = array(
                'status'    => true,
                'message'    => 'Data berhasil disimpan..',
            );
            return response()->json($return);
        } else {
            $return = array(
                'status'    => true,
                'message'    => 'Data berhasil disimpan..',
            );
            return response()->json($return);
        }
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
    public function edit(Request $request)
    {

        penduduk::where('id', $request->id_p)
            ->update([
                'nik' => $request->nik,
                'kk' => $request->kk,
                'nama' => $request->name,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'kepala_keluarga' => $request->kepala_keluarga,
                'jenis_kelamin' => $request->jenis_kelamin,
                'pendidikan' => $request->pendidikan,
                'alamat' => $request->alamat,
                'agama' => $request->agama,
                'status' => $request->statuss,
                'pekerjaan' => $request->pekerjaan,
                'kewarganegaraan' => $request->kewarganegaraan,
                'ayah' => $request->ayah,
                'ibu' => $request->ibu,
            ]);
        $return = array(
            'status'    => true,
            'message'    => 'Data berhasil disimpan..',
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
        $res = penduduk::findOrFail($id);
        if ($res == null) {
            return false;
        }
        $res->delete();
        return true;
    }
}
