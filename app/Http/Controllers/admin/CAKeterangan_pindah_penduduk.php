<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\migrasi;
use Illuminate\Http\Request;
use App\Models\penduduk;
use Yajra\DataTables\DataTables;
use App\Models\notif;


class CAKeterangan_pindah_penduduk extends Controller
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
            return Datatables::of(migrasi::all())->addIndexColumn()
                ->addColumn('berkas', function ($data) {

                    $dataj = json_encode($data);

                    $btn =
                        "<ul class='list-inline mb-0'>
        <li class='list-inline-item'>
        <a href='" . $data->file_migrasi . "' target='_blank' class='btn btn-success btn-xs mb-1'>Lihat Berkas</a>
        </li>
        </ul>";
                    return $btn;
                })->addColumn('aksi', function ($data) {
                    if ($data->status_migrasi == 1) {
                        $dataj = json_encode($data);
                        // url() }}" + "/" + datacetak + "?id_penduduk=" + idpenduduk;

                        $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>


                <a class='btn btn-primary btn-xs mb-1' target = '_blank' href='cetak/m-cetak/" . $data->penduduk->id . "'>Cetak</a>
                </ul>";
                        // dd();
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
                })->addColumn('jenis_kelamin', function ($data) {
                    $btn = $data->penduduk->jenis_kelamin;
                    return $btn;
                })->rawColumns(['aksi', 'nama', 'nik', 'berkas'])->make(true);
        }
        return view('admin.va_m', compact('penduduk', 'notif', 'nnotif'));
    }

    public function mk()
    {
        //notifikasi
        $notif = notif::all();
        $nnotif = count($notif);
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
        return view('admin.va_mk', compact('penduduk', 'notif', 'nnotif'));
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
        if ($request->hasFile('file_migrasi')) {
            $file = $request->file('file_migrasi');

            $filename = time() . '_' . $file->getClientOriginalName();

            // File extension
            $extension = $file->getClientOriginalExtension();

            // File upload location
            $location = 'gambar';

            // Upload file
            $file->move($location, $filename);

            // File path
            $filepath = url('gambar/' . $filename);

            $migrasi = migrasi::create([
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
                "file_migrasi" => $filepath,
            ]);

            notif::create([
                "jns_notif" => 5,
                "id_ps" => $migrasi->id
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
        migrasi::where('id', $id)
            ->update([
                'status_migrasi' => 1,
            ]);
        notif::where('jns_notif', 5)->where('id_ps', $id)->delete();
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
        notif::where('jns_notif', 5)->where('id_ps', $id)->delete();
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
        notif::where('jns_notif', 5)->where('id_ps', $id)->delete();
        if ($res == null) {
            return false;
        }
        $res->delete();
        return true;
    }
}
