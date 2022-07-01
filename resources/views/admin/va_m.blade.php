@extends('layouts.vl_admin')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Kelola Surat</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Keterangan Pindah / Pendatang Penduduk</h4>
                            <button type="button" id="add" name="add"
                                class="btn btn-success btn-sm mb-2 add">Tambah</button>
                            <table id="tabelbasic" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Pindah</th>
                                        <th>Alasan Pindah</th>
                                        <th>Status</th>
                                        <th>Berkas</th>
                                        <th>Aksi</th>
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
                <form name="formstatus" id="formstatus" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Surat</h5>

                    </div>
                    <div class="modal-body mx-3">
                        <div class="form mb-3">
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Nama Penduduk</label>
                            <div class="form-group mb-3">
                                <select class="form-control mb-3" data-toggle="select2" aria-hidden="true" id="id_penduduk"
                                    name="id_penduduk">
                                    <option value="">Pilih</option>
                                    @foreach ($penduduk as $data)
                                        <option value={{ $data->id }}>{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label data-error="wrong" data-success="right" for="alamat_tujuan">Alamat Tujuan</label>
                            <input type="text" name="alamat_tujuan" id="alamat_tujuan" class="form-control mb-3">

                            <label data-error="wrong" data-success="right" for="desa_migrasi">Desa/ Kelurahan Tujuan</label>
                            <input type="text" name="desa_migrasi" id="desa_migrasi" class="form-control mb-3">

                            <label data-error="wrong" data-success="right" for="kec_migrasi">Kecamatan Tujuan</label>
                            <input type="text" name="kec_migrasi" id="kec_migrasi" class="form-control mb-3">

                            <label data-error="wrong" data-success="right" for="kab_migrasi">Kabupaten Tujuan</label>
                            <input type="text" name="kab_migrasi" id="kab_migrasi" class="form-control mb-3">

                            <label data-error="wrong" data-success="right" for="prov_migrasi">Provinsi Tujuan</label>
                            <input type="text" name="prov_migrasi" id="prov_migrasi" class="form-control mb-3">

                            <label data-error="wrong" data-success="right" for="tgl_migrasi">Tanggal Pindah</label>
                            <input type="date" name="tgl_migrasi" id="tgl_migrasi" class="form-control mb-3">

                            <label data-error="wrong" data-success="right" for="alasan_migrasi">Alasan Pindah</label>
                            <input type="text" name="alasan_migrasi" id="alasan_migrasi" class="form-control mb-3">

                            <label data-error="wrong" data-success="right" for="jenis_migrasi">Jenis</label>
                            <select name="jenis_migrasi" id="jenis_migrasi" class="form-control mb-3">

                                <option value="1">Pendatang</option>
                                <option value="2">Pindah / Keluar</option>
                            </select>

                            {{-- <label data-error="wrong" data-success="right" for="jumlah_pindah">Jumlah Pindah</label>
                            <input type="number" name="jumlah_pindah" id="jumlah_pindah" class="form-control mb-3"> --}}

                            <label data-error="wrong" data-success="right" for="orangeForm-name">KTP / KK</label>
                            <input class="form-control" type="file" name="file_migrasi" id="file_migrasi">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="submit" name="submit">Save
                                changes</button>
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
                    url: "{{ url('admin/keterangan-pindah-penduduk') }}",
                },
                columns: [{
                        nama: 'DT_RowIndex',
                        data: 'DT_RowIndex'
                    }, {
                        nama: 'nik',
                        data: 'nik'
                    }, {
                        nama: 'nama',
                        data: 'nama'
                    }, {
                        nama: 'jenis_kelamin',
                        data: 'jenis_kelamin'
                    }, {
                        nama: 'tgl_migrasi',
                        data: 'tgl_migrasi',
                        "render": function(data) {
                            var date = new Date(data);
                            var month = date.getMonth() + 1;
                            return (month.toString().length > 1 ? month : "0" + month) + "/" + date
                                .getDate() + "/" + date.getFullYear();
                        }
                    },
                    {
                        nama: 'alasan_migrasi',
                        data: 'alasan_migrasi'
                    },
                    {
                        nama: 'status_migrasi',
                        data: 'status_migrasi',
                        "searchable": false,
                        "orderable": false,
                        "render": function(data, type, row) {

                            if (row.status_migrasi == 0) {
                                return 'Belum di Verifikasi';
                            } else if (row.status_migrasi == 1) {
                                return 'Diterima';
                            } else {
                                return 'Ditolak';
                            }
                        }
                    },
                    {
                        nama: 'berkas',
                        data: 'berkas'
                    },
                    {
                        nama: 'aksi',
                        data: 'aksi'
                    },
                ],

            });
        });

        // $('#submit').on('click', function(id) {
        //     id.preventDefault()
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     $('#submit').html('Please Wait...');
        //     $("#submit").attr("disabled", true);
        //     $.ajax({
        //         url: "{{ url('admin/keterangan-pindah-penduduk') }}",
        //         type: "POST",
        //         data: $('#formstatus').serialize(),
        //         success: function(response) {
        //             $('#submit').html('Submit');
        //             $("#submit").attr("disabled", false);
        //             $('#exampleModal').modal('hide');
        //             tabel.ajax.reload();
        //             Lobibox.notify('success', {
        //                 pauseDelayOnHover: true,
        //                 continueDelayOnInactiveTab: false,
        //                 position: 'top right',
        //                 icon: 'bx bx-check-circle',
        //                 msg: 'Data Tersimpan'
        //             });
        //         }
        //     });
        // });


        $(".add").click(function() {
            var title = " koko";
            $('#modalbasic').modal('show');
        });

        function update(id) {
            data = confirm("Klik Ok Untuk Melanjutkan");

            if (data) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url + '/admin/keterangan-pindah-penduduk/update/' + id,
                    type: "POST",
                    success: function(e) {
                        console.log(e);
                        // $.LoadingOverlay("hide");
                        tabel.ajax.reload();

                        Lobibox.notify('success', {
                            pauseDelayOnHover: true,
                            continueDelayOnInactiveTab: false,
                            position: 'top right',
                            icon: 'bx bx-check-circle',
                            msg: 'Data Berhasi Dihapus'
                        });
                    }
                })

            }
        }

        function updatedua(id) {
            data = confirm("Klik Ok Untuk Melanjutkan");

            if (data) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url + '/admin/keterangan-pindah-penduduk/updatedua/' + id,
                    type: "POST",
                    success: function(e) {
                        console.log(e);
                        // $.LoadingOverlay("hide");
                        tabel.ajax.reload();

                        Lobibox.notify('success', {
                            pauseDelayOnHover: true,
                            continueDelayOnInactiveTab: false,
                            position: 'top right',
                            icon: 'bx bx-check-circle',
                            msg: 'Data Berhasi Dihapus'
                        });
                    }
                })

            }
        }

        function hapus(id) {
            data = confirm("Klik Ok Untuk Melanjutkan");

            if (data) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                // $.LoadingOverlay("show");

                $.ajax({
                    url: url + '/admin/keterangan-pindah-penduduk/' + id,
                    type: "delete",
                    success: function(e) {
                        console.log(e);
                        // $.LoadingOverlay("hide");
                        // Lobibox.notify('success', {
                        //     pauseDelayOnHover: true,
                        //     continueDelayOnInactiveTab: false,
                        //     position: 'top right',
                        //     icon: 'bx bx-check-circle',
                        //     msg: 'Data Berhasi Dihapus'
                        // });
                        if (e == '1') {
                            tabel.ajax.reload();
                        }
                        // window.location.reload();
                    }
                });

            }
        }

        $('#formstatus').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('admin/keterangan-pindah-penduduk') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $('#submit').html('Submit');
                    $("#submit").attr("disabled", false);
                    $('#modalbasic').modal('hide');
                    tabel.ajax.reload();
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    </script>
@endpush
