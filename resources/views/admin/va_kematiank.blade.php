@extends('layouts.vl_admin')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Kelola Laporan</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Keterangan Kematian</h4>
                            <input type="hidden" value="2" id="id_jenis" name="id_jenis">
                            <button type="button submit" id="submit" name="submit"
                                class="btn btn-success btn-sm mb-2 add">Cetak</button>
                            <table id="tabelbasic" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alm</th>
                                        <th>Nama Pelapor</th>
                                        <th>Tempat Kematian</th>
                                        <th>Tanggal Kematian</th>
                                        <th>Status</th>
                                        {{-- <th>Aksi</th> --}}
                                    </tr>
                                </thead>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->



        </div> <!-- container -->

    </div> <!-- content -->
    <div class="modal fade" id="modalbasic" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form name="formstatus" id="formstatus" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Surat</h5>

                    </div>
                    <div class="modal-body mx-3">
                        <div class="form mb-3">
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Nama Pelapor</label>
                            <div class="form-group mb-2">
                                <select class="form-control " data-toggle="select2" aria-hidden="true" id="id_penduduk"
                                    name="id_penduduk">
                                    <option value="">Pilih</option>
                                    @foreach ($penduduk as $data)
                                        <option value={{ $data->id }}>{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label data-error="wrong" data-success="right" for="nama_kem">
                                Nama Almarhum
                            </label>
                            <input class="form-control mb-2" type="text" id="nama_kem" name="nama_kem">
                            <label data-error="wrong" data-success="right" for="jk_kem">Jenis Kelamin Almarhum</label>
                            <select name="jk_kem" id="jk_kem" class="form-control mb-2">
                                <option value="">Pilih</option>
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                            <label data-error="wrong" data-success="right" for="alamat_kem">ALamat Almarhum</label>
                            <input type="text" class="form-control mb-2" name="alamat_kem" id="alamat_kem">
                            <label data-error="wrong" data-success="right" for="hari">Hari Meninggal</label>
                            <select name="hari" id="hari" class="form-control mb-2">
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                            <label data-error="wrong" data-success="right" for="hari">Tanggal Meninggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control mb-2">
                            <label data-error="wrong" data-success="right" for="umur_kem">Umur Meninggal</label>
                            <input type="number" id="umur_kem" class="form-control mb-2" name="umur_kem">
                            <label data-error="wrong" data-success="right" for="tmpt_kem">Tempat Meninggal</label>
                            <input type="text" class="form-control mb-2" name="tmpt_kem" id="tmpt_kem">
                            <label data-error="wrong" data-success="right" for="penyebab">Penyebab Meninggal</label>
                            <input type="text" class="form-control mb-2" name="penyebab" id="penyebab">
                            <label data-error="wrong" data-success="right" for="hub_kem">Hubungan dengan Almarhum</label>
                            <input type="text" class="form-control mb-2" name="hub_kem" id="hub_kem">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="submit" name="submit">Save changes</button>
                        </div>
                        @csrf
                </form>
            </div>
        </div>
    </div>
@endsection



@push('addon-script')
    <script>
        var url = window.location.origin;

        $(document).ready(function() {


            tabel = $("#tabelbasic").DataTable({
                // dom: 'Bfrtip',
                // buttons: [{
                //     extend: "print",
                //     text: "Print - Results",
                //     exportOptions: {
                //         //columns: ":visible"
                //         columns: function(idx, data, node) {
                //             if (node.innerHTML == "Status" || node.hidden)
                //                 return false;
                //             else if (node.innerHTML == "Aksi" || node.hidden)
                //                 return false;
                //             return true;
                //         }
                //     }


                // }],
                columnDefs: [{
                        targets: 0,
                        width: "10%",
                    }, {
                        targets: 1,
                        width: "10%",
                    },
                    {
                        targets: 1,
                        width: "10%",
                    },
                    {
                        targets: 1,
                        width: "10%",
                    },
                    {
                        targets: 1,
                        width: "10%",
                    },
                    {
                        targets: 1,
                        width: "10%",
                    },
                    {
                        targets: 2,
                        width: "20%",
                    },

                ],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('admin/keterangan-kematian') }}",
                },
                columns: [{
                        nama: 'DT_RowIndex',
                        data: 'DT_RowIndex'
                    }, {
                        nama: 'nama_kem',
                        data: 'nama_kem'
                    }, {
                        nama: 'nama',
                        data: 'nama'
                    }, {
                        nama: 'tmpt_kem',
                        data: 'tmpt_kem'
                    }, {
                        nama: 'tanggal',
                        data: 'tanggal',
                        "render": function(data) {
                            var date = new Date(data);
                            var month = date.getMonth() + 1;
                            return (month.toString().length > 1 ? month : "0" + month) + "/" + date
                                .getDate() + "/" + date.getFullYear();
                        }
                    }, {
                        nama: 'status_kem',
                        data: 'status_kem',
                        "searchable": false,
                        "orderable": false,
                        "render": function(data, type, row) {

                            if (row.status_kem === 0) {
                                return 'Belum di Verifikasi';
                            } else if (row.status_kem == 1) {
                                return 'Diterima';
                            } else {
                                return 'Ditolak';
                            }
                        }
                    },
                    // {
                    //     nama: 'aksi',
                    //     data: 'aksi'
                    // },
                ],

            });
        });

        $('#submit').on('click', function(id) {
            var idjenis = $("#id_jenis").val();
            // var datacetak = $("#datacetak").val();
            console.log(idjenis);

            var ini = "{{ url('/laporan/') }}" + "/" + idjenis;
            console.log(ini);
            window.open(ini, "_blank");

        });
    </script>
@endpush
