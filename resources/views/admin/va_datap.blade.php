@extends('layouts.vl_admin')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Kelola Data Penduduk</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Data Penduduk</h4>
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
                                        <th>Alamat</th>
                                        {{-- <th>Status</th> --}}
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Penduduk</h5>

                    </div>
                    <div class="modal-body mx-3">
                        <div class="form">
                            <div class="form-group">
                                <label class="" data-error="wrong" data-success="right" for="nik">NIK</label>
                                <input type="number" name="nik" id="nik" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right" for="kk">KK</label>
                                <input type="number" name="kk" id="kk" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right" for="name">NAMA
                                    LENGKAP</label>
                                <input type="text" name="name" id="name" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right" for="email">EMAIL</label>
                                <input type="text" name="email" id="email" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right" for="tempat_lahir">TEMPAT
                                    LAHIR</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right" for="tanggal_lahir">TANGGAL
                                    LAHIR</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right" for="kepala_keluarga">KEPALA
                                    KELUARGA</label>
                                <input type="text" name="kepala_keluarga" id="kepala_keluarga" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right" for="jenis_kelamin">Jenis
                                    Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control mb-2" autofocus>
                                    <option value="">Pilih</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>

                                <label class="" data-error="wrong" data-success="right"
                                    for="pendidikan">PENDIDIKAN</label>
                                <input type="text" name="pendidikan" id="pendidikan" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right"
                                    for="alamat">ALAMAT</label>
                                <input type="text" name="alamat" id="alamat" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right"
                                    for="agama">AGAMA</label>
                                <input type="text" name="agama" id="agama" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right"
                                    for="statuss">STATUS</label>
                                <input type="text" name="statuss" id="statuss" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right"
                                    for="pekerjaan">PEKERJAAN</label>
                                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right"
                                    for="kewarganegaraan">KEWARGANEGARAAN</label>
                                <input type="text" name="kewarganegaraan" id="kewarganegaraan"
                                    class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right" for="ayah">NAMA
                                    AYAH</label>
                                <input type="text" name="ayah" id="ayah" class="form-control mb-2">

                                <label class="" data-error="wrong" data-success="right" for="ibu">NAMA
                                    IBU</label>
                                <input type="text" name="ibu" id="ibu" class="form-control mb-2">



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
                        targets: 2,
                        width: "20%",
                    },
                    {
                        targets: 3,
                        width: "10%",
                    },
                    {
                        targets: 4,
                        width: "10%",
                    },
                    {
                        targets: 4,
                        width: "20%",
                    },
                    {
                        targets: 4,
                        width: "20%",
                    },

                ],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('admin/kelola-data-penduduk') }}",
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
                            return (month.toString().length > 1 ? month : "0" + month) + "/" + date
                                .getDate() + "/" + date.getFullYear();
                        }
                    }, {
                        nama: 'alamat',
                        data: 'alamat'
                    },
                    // {
                    //     nama: 'status_p',
                    //     data: 'status_p'
                    // },
                    {
                        nama: 'aksi',
                        data: 'aksi'
                    },
                ],

            });
        });

        $(".add").click(function() {
            var title = " koko";
            $('#modalbasic').modal('show');
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
                url: "{{ url('admin/kelola-data-penduduk') }}",
                type: "POST",
                data: $('#formstatus').serialize(),
                success: function(response) {
                    $('#submit').html('Submit');
                    $("#submit").attr("disabled", false);
                    $('#modalbasic').modal('hide');
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
    </script>
@endpush
