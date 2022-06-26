<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kelahiran;
use Illuminate\Http\Request;
use App\Models\penduduk;
use Yajra\DataTables\DataTables;
use App\Models\notif;

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

        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);

        if (request()->ajax()) {
            return Datatables::of(kelahiran::all())->addIndexColumn()
                ->addColumn('berkas', function ($data) {

                    $dataj = json_encode($data);

                    $btn =
                        "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>
                <a href='" . $data->file_lahir . "' target='_blank' class='btn btn-success btn-xs mb-1'>Lihat Berkas</a>
                </li>
                </ul>";
                    return $btn;
                })->addColumn('aksi', function ($data) {
                    $dataj = json_encode($data);

                    if ($data->status_lahir == 1) {
                        $btn = "<ul class='list-inline mb-0'>
                    <li class='list-inline-item'>
                    <a class='btn btn-primary btn-xs mb-1' target = '_blank' href='cetak/k-cetak/" . $data->penduduk->id . "'>Cetak</a>
                    </li>
                    </ul>";
                    } else {
                        $btn = "<ul class='list-inline mb-0'>
                    <li class='list-inline-item'>
                    <button type='button' data-toggle='modal' onclick='update(" . $data->id . ")'   class='btn btn-success btn-xs mb-1'>Terima</button>
                    <button type='button' data-toggle='modal' onclick='updatedua(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Tolak</button>
                    <button type='button' data-toggle='modal' onclick='hapus(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Hapus</button>
                    </li>

                    </ul>";
                    }

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
                })->rawColumns(['aksi', 'nama', 'nik', 'tempat_lahir', 'tanggal_lahir', 'berkas'])->make(true);
        }
        return view('admin.va_kelahiran', compact('penduduk', 'notif', 'nnotif'));
    }

    public function kk()
    {
        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);
        $penduduk = penduduk::all();

        if (request()->ajax()) {
            return Datatables::of(kelahiran::all())->addIndexColumn()
                ->addColumn('aksi', function ($data) {
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
        return view('admin.va_kelahirank', compact('penduduk', 'notif', 'nnotif'));
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
        if ($request->hasFile('file_lahir')) {
            $file = $request->file('file_lahir');

            $filename = time() . '_' . $file->getClientOriginalName();

            // File extension
            $extension = $file->getClientOriginalExtension();

            // File upload location
            $location = 'gambar';

            // Upload file
            $file->move($location, $filename);

            // File path
            $filepath = url('gambar/' . $filename);

            $kelahiran =  kelahiran::create([
                "id_penduduk" => $request->id_penduduk,
                "anak_ke" => $request->anak_ke,
                "nama_lahir" => $request->nama_lahir,
                "ttl_lahir" => $request->ttl_lahir,
                "jk_lahir" => $request->jk_lahir,
                "alamat_lahir" => $request->alamat_lahir,
                "ayah_lahir" => $request->ayah_lahir,
                "ibu_lahir" => $request->ibu_lahir,
                "status_lahir" => 0,
                "file_lahir" =>  $filepath,
            ]);

            notif::create([
                "jns_notif" => 2,
                "id_ps" => $kelahiran->id
            ]);

            $return = array(
                'status'    => true,
                'message'    => 'Data berhasil disimpan..',
            );
            return response()->json($return);
        } else {
            $return = array(
                'status'    => false,
                'message'    => 'Data gagal disimpan..',
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
    public function edit($id)
    {
        kelahiran::where('id', $id)
            ->update([
                'status_lahir' => 1,
            ]);
        notif::where('jns_notif', 2)->where('id_ps', $id)->delete();

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
        notif::where('jns_notif', 2)->where('id_ps', $id)->delete();
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
        notif::where('jns_notif', 2)->where('id_ps', $id)->delete();
        $res = kelahiran::findOrFail($id);
        if ($res == null) {
            return false;
        }
        $res->delete();
        return true;
    }
}
