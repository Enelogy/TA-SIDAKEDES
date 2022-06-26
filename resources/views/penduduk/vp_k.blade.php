@extends('layouts.vl_penduduk')
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
                            <h4 class="header-title">Keterangan Kelahiran</h4>
                            <button type="button" id="add" name="add"
                                class="btn btn-success btn-sm mb-2 add">Tambah</button>
                            <table id="tabelbasic" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelapor</th>
                                        <th>Nama Anak</th>
                                        <th>Tempat Tanggal lahir</th>
                                        <th>Anak Ke</th>
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
                <form name="formstatus" id="formstatus" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Surat</h5>

                    </div>
                    <div class="modal-body mx-3">
                        <div class="form mb-3">
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Nama Penduduk</label>
                            <div class="form-group mb-3">
                                <select class="form-control" data-toggle="select2" aria-hidden="true" id="id_penduduk"
                                    name="id_penduduk">
                                    <option value=" {{ Auth::user()->id }}"> {{ Auth::user()->name }}</option>
                                </select>
                                <label class="mt-3" data-error="wrong" data-success="right" for="nama_lahir">Nama
                                    Anak</label>
                                <input type="text" name="nama_lahir" id="nama_lahir" class="form-control">
                                <label class="mt-3" data-error="wrong" data-success="right" for="ttl_lahir">Tempat,
                                    Tanggal Lahir (Tempat, HH/MM/TTTT)</label>
                                <input type="text" name="ttl_lahir" id="ttl_lahir" class="form-control">
                                <label class="mt-3" data-error="wrong" data-success="right" for="jk_lahir">
                                    Jenis Kelamin Anak
                                </label>
                                <select class="form-control" name="jk_lahir" id="jk_lahir">
                                    <option value="">Pilih</option>
                                    <option value="laki-laki">laki-laki</option>
                                    <option value="perempuan">perempuan</option>
                                </select>
                                <label class="mt-3" data-error="wrong" data-success="right" for="alamat_lahir">Alamat
                                    Kelahiran</label>
                                <input type="text" name="alamat_lahir" id="alamat_lahir" class="form-control">
                                <label class="mt-3" data-error="wrong" data-success="right" for="ayah_lahir">Nama
                                    Ayah</label>
                                <input type="text" name="ayah_lahir" id="ayah_lahir" class="form-control">
                                <label class="mt-3" data-error="wrong" data-success="right" for="ibu_lahir">Nama
                                    Ibu</label>
                                <input type="text" name="ibu_lahir" id="ibu_lahir" class="form-control">
                                <label class="mt-3" data-error="wrong" data-success="right" for="anak_ke">Anak
                                    Ke-</label>
                                <input type="number" name="anak_ke" id="anak_ke" class="form-control">
                                <label class="mt-3" data-error="wrong" data-success="right" for="orangeForm-name">KTP
                                    / KK</label>
                                <input class="form-control" type="file" name="file_lahir" id="file_lahir">
                            </div>
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

                ],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('penduduk/pk') }}",
                },
                columns: [{
                        nama: 'DT_RowIndex',
                        data: 'DT_RowIndex'
                    }, {
                        nama: 'nama',
                        data: 'nama'
                    },
                    {
                        nama: 'nama_lahir',
                        data: 'nama_lahir'
                    }, {
                        nama: 'ttl_lahir',
                        data: 'ttl_lahir'
                    }, {
                        nama: 'anak_ke',
                        data: 'anak_ke'
                    }, {
                        nama: 'status_lahir',
                        data: 'status_lahir',
                        "searchable": false,
                        "orderable": false,
                        "render": function(data, type, row) {

                            if (row.status_lahir === 0) {
                                return 'Belum di Verifikasi';
                            } else if (row.status_lahir == 1) {
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
        //         url: "{{ url('admin/kelahiran') }}",
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

        $('#formstatus').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('admin/kelahiran') }}",
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
    </script>
@endpush
