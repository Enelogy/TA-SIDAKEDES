@extends('layouts.vl_admin')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Data Kelahiran Penduduk</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Data Kelahiran Penduduk</h4>
                            <button type="button" id="add" name="add"
                                class="btn btn-success btn-sm mb-2 add">Tambah</button>

                            <input type="hidden" value="1" id="id_jenis" name="id_jenis">
                            <button type="button submit" id="submitdua" name="submitdua"
                                class="btn btn-success btn-sm mb-2 ">Cetak</button>

                            <table id="tabelbasic" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>KK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Ayah</th>
                                        <th>Ibu</th>
                                        <th>Tanggal Lahir</th>
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
                                <label class="" data-error="wrong" data-success="right" for="id_penduduk">Nama
                                    Penduduk</label>
                                <select class="form-control" name="id_penduduk" id="id_penduduk">
                                    <option value="">Pilih</option>
                                    @foreach ($penduduk as $p)
                                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                    @endforeach
                                </select>
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
                    },

                ],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('admin/sirkulasi/kelahiran-s') }}",
                },
                columns: [{
                        nama: 'DT_RowIndex',
                        data: 'DT_RowIndex'
                    }, {
                        nama: 'kk',
                        data: 'kk'
                    }, {
                        nama: 'nama',
                        data: 'nama'
                    }, {
                        nama: 'jenis_kelamin',
                        data: 'jenis_kelamin'
                    },{
                        nama: 'ayah',
                        data: 'ayah'
                    },{
                        nama: 'ibu',
                        data: 'ibu'
                    },
                    {
                        nama: 'tanggal_lahir',
                        data: 'tanggal_lahir',
                        "render": function(data) {
                            var date = new Date(data);
                            var month = date.getMonth() + 1;
                            return (month.toString().length > 1 ? month : "0" + month) + "/" + date
                                .getDate() + "/" + date.getFullYear();
                        }
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
                url: "{{ url('admin/sirkulasi/kelahiran-s/tambah') }}",
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

        $('#submitdua').on('click', function(id) {
            var idjenis = $("#id_jenis").val();
            // var datacetak = $("#datacetak").val();
            console.log(idjenis);

            var ini = "{{ url('/laporan/') }}" + "/" + idjenis;
            console.log(ini);
            window.open(ini, "_blank");

        });
    </script>
@endpush
