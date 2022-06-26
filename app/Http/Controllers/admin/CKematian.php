<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kematian;
use Illuminate\Http\Request;
use App\Models\penduduk;
use Yajra\DataTables\DataTables;
use App\Models\notif;


class CKematian extends Controller
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
            return Datatables::of(kematian::all())->addIndexColumn()
                ->addColumn('berkas', function ($data) {

                    $dataj = json_encode($data);

                    $btn =
                        "<ul class='list-inline mb-0'>
            <li class='list-inline-item'>
            <a href='" . $data->file_kem . "' target='_blank' class='btn btn-success btn-xs mb-1'>Lihat Berkas</a>
            </li>
            </ul>";
                    return $btn;
                })->addColumn('aksi', function ($data) {
                    if ($data->status_kem == 1) {
                        $btn = "<ul class='list-inline mb-0'>
                    <li class='list-inline-item'>
                    <a class='btn btn-primary btn-xs mb-1' target = '_blank' href='cetak/kk-cetak/" . $data->penduduk->id . "'>Cetak</a>
                    </li>
                    </ul>";
                    } else {
                        $dataj = json_encode($data);

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
        return view('admin.va_kematian', compact('penduduk', 'notif', 'nnotif'));
    }

    public function kkk()
    {
        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);
        $penduduk = penduduk::all();
        if (request()->ajax()) {
            return Datatables::of(kematian::all())->addIndexColumn()->addColumn('aksi', function ($data) {
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
        return view('admin.va_kematiank', compact('penduduk', 'notif', 'nnotif'));
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
        if ($request->hasFile('file_kem')) {
            $file = $request->file('file_kem');

            $filename = time() . '_' . $file->getClientOriginalName();

            // File extension
            $extension = $file->getClientOriginalExtension();

            // File upload location
            $location = 'gambar';

            // Upload file
            $file->move($location, $filename);

            // File path
            $filepath = url('gambar/' . $filename);

            $kematian = kematian::create([
                "id_penduduk" => $request->id_penduduk,
                "nama_kem" => $request->nama_kem,
                "jk_kem" => $request->jk_kem,
                "alamat_kem" => $request->alamat_kem,
                "hari" => $request->hari,
                "umur_kem" => $request->umur_kem,
                "tanggal" => $request->tanggal,
                "tmpt_kem" => $request->tmpt_kem,
                "penyebab" => $request->penyebab,
                "hub_kem" => $request->hub_kem,
                "status_kem" => 0,
                "file_kem" => $filepath,
            ]);

            notif::create([
                "jns_notif" => 3,
                "id_ps" => $kematian->id
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
        kematian::where('id', $id)
            ->update([
                'status_kem' => 1,
            ]);
        notif::where('jns_notif', 3)->where('id_ps', $id)->delete();
        $return = array(
            'status'    => true,
            'message'    => 'Data berhasil diupdate..',
        );
        return response()->json($return);
    }

    public function edit_dua($id)
    {
        kematian::where('id', $id)
            ->update([
                'status_kem' => 2,
            ]);
        notif::where('jns_notif', 3)->where('id_ps', $id)->delete();

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
        $res = kematian::findOrFail($id);
        notif::where('jns_notif', 3)->where('id_ps', $id)->delete();

        if ($res == null) {
            return false;
        }
        $res->delete();
        return true;
    }
}
