<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\penduduk;
use App\Models\ktp_s;
use Yajra\DataTables\DataTables;
use App\Models\notif;

class CKartu_tanda_penduduk extends Controller
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
        $penduduk = penduduk::all();
        if (request()->ajax()) {
            return Datatables::of(ktp_s::all())->addIndexColumn()
                ->addColumn('berkas', function ($data) {

                    $dataj = json_encode($data);

                    $btn =
                        "<ul class='list-inline mb-0'>
        <li class='list-inline-item'>
        <a href='" . $data->file_ktps . "' target='_blank' class='btn btn-success btn-xs mb-1'>Lihat Berkas</a>
        </li>
        </ul>";
                    return $btn;
                })->addColumn('aksi', function ($data) {
                    $dataj = json_encode($data);
                    if ($data->status_ktps == 1) {
                        $dataj = json_encode($data);
                        // url() }}" + "/" + datacetak + "?id_penduduk=" + idpenduduk;

                        $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>


                <a class='btn btn-primary btn-xs mb-1' target = '_blank' href='cetak/ktp-cetak/" . $data->penduduk->id . "'>Cetak</a>
                </ul>";
                        // dd();
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
        return view('admin.va_ktp', compact('penduduk', 'notif', 'nnotif'));
    }

    public function ktpk()
    {

        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);
        $penduduk = penduduk::all();
        if (request()->ajax()) {
            return Datatables::of(ktp_s::all())->addIndexColumn()->addColumn('aksi', function ($data) {

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
        return view('admin.va_ktpk', compact('penduduk', 'notif', 'nnotif'));
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
        if ($request->hasFile('file_ktps')) {
            $file = $request->file('file_ktps');

            $filename = time() . '_' . $file->getClientOriginalName();

            // File extension
            $extension = $file->getClientOriginalExtension();

            // File upload location
            $location = 'gambar';

            // Upload file
            $file->move($location, $filename);

            // File path
            $filepath = url('gambar/' . $filename);

            $ktp = ktp_s::create([
                "id_penduduk" => $request->id_penduduk,
                "desa_ktps" => $request->desa_ktps,
                "kec_ktps" => $request->kec_ktps,
                "kab_ktps" => $request->kab_ktps,
                "status_ktps" => 0,
                "file_ktps" =>  $filepath,
            ]);

            notif::create([
                "jns_notif" => 4,
                "id_ps" => $ktp->id
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
        ktp_s::where('id', $id)
            ->update([
                'status_ktps' => 1,
            ]);
        notif::where('jns_notif', 4)->where('id_ps', $id)->delete();

        $return = array(
            'status'    => true,
            'message'    => 'Data berhasil diupdate..',
        );
        return response()->json($return);
    }


    public function edit_dua($id)
    {
        ktp_s::where('id', $id)
            ->update([
                'status_ktps' => 2,
            ]);
        notif::where('jns_notif', 4)->where('id_ps', $id)->delete();
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
        $res = ktp_s::findOrFail($id);
        notif::where('jns_notif', 4)->where('id_ps', $id)->delete();
        if ($res == null) {
            return false;
        }
        $res->delete();
        return true;
    }
}
