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
                            <h4 class="header-title">Kartu Keluarga Sementara</h4>
                            <button type="button" id="add" name="add"
                                class="btn btn-success btn-sm mb-2 add">Tambah</button>
                            <table id="tabelbasic" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Status</th>
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
                <form name="formstatus" id="formstatus" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Surat</h5>

                    </div>
                    <div class="modal-body mx-3">
                        <div class="form mb-3">
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Nama Penduduk</label>
                            <div class="form-group mb-3">
                                <select class="form-control " data-toggle="select2" aria-hidden="true" id="id_penduduk"
                                    name="id_penduduk">
                                    <option value="">Pilih</option>
                                    @foreach ($penduduk as $data)
                                        <option value={{ $data->id }}>{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Nama Penduduk 2</label>
                            <div class="form-group mb-3">
                                <select class="form-control " data-toggle="select2" aria-hidden="true" id="id_pendudukdua"
                                    name="id_pendudukdua">
                                    <option value="">Pilih</option>
                                    @foreach ($penduduk as $data)
                                        <option value={{ $data->id }}>{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
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
                    url: "{{ url('admin/kartu-keluarga-sementara') }}",
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
                    nama: 'tempat_lahir',
                    data: 'tempat_lahir'
                }, {
                    nama: 'tanggal_lahir',
                    data: 'tanggal_lahir',
                    "render": function(data) {
                        var date = new Date(data);
                        var month = date.getMonth() + 1;
                        return (month.toString().length > 1 ? month : "0" + month) + "/" +
                            date
                            .getDate() + "/" + date.getFullYear();
                    }
                }, {
                    nama: 'status_kks',
                    data: 'status_kks',
                    "searchable": false,
                    "orderable": false,
                    "render": function(data, type, row) {

                        if (row.status_kks === 0) {
                            return 'Belum di Verifikasi';
                        } else if (row.status_kks == 1) {
                            return 'Diterima';
                        } else {
                            return 'Ditolak';
                        }
                    }
                }, {
                    nama: 'aksi',
                    data: 'aksi'
                }, ],

            });
        });

        $('#submit').on('click', function(id) {
            id.preventDefault()
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#submit').html('Please Wait...');
            $("#submit").attr("disabled", true);
            $.ajax({
                url: "{{ url('admin/kartu-keluarga-sementara') }}",
                type: "POST",
                data: $('#formstatus').serialize(),
                success: function(response) {
                    $('#submit').html('Submit');
                    $("#submit").attr("disabled", false);
                    $('#exampleModal').modal('hide');
                    tabel.ajax.reload();
                    Lobibox.notify('success', {
                        pauseDelayOnHover: true,
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        icon: 'bx bx-check-circle',
                        msg: 'Data Tersimpan'
                    });
                }
            });
        });


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
                    url: url + '/admin/kartu-keluarga-sementara/update/' + id,
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
                    url: url + '/admin/kartu-keluarga-sementara/updatedua/' + id,
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
                    url: url + '/admin/kartu-keluarga-sementara/updatedua/' + id,
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
                    url: url + '/admin/kartu-keluarga-sementara/' + id,
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
    </script>
@endpush
