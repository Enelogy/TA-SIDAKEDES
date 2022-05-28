@extends('layouts.vl_admin')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Cetak Surat</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Cetak Surat
                                @if ($datacetak == 'kks')
                                    Kartu Keterangan Sementara
                                @elseif ($datacetak == 'kk')
                                    Keterangan Kematian
                                @elseif ($datacetak == 'k')
                                    Kelahiran
                                @elseif ($datacetak == 'ktp')
                                    Kartu Tanda Penduduk Sementara
                                @elseif ($datacetak == 'm')
                                    Keterangan Pindah Penduduk
                                @endif
                            </h4>
                            <div class="form-group mb-3">
                                <select class="form-control " data-toggle="select2" aria-hidden="true" id="id_penduduk"
                                    name="id_penduduk">
                                    <option value="">Pilih</option>
                                    @if ($datacetak == 'kks')
                                        @foreach ($datakks as $data)
                                            <option value={{ $data->id }}>{{ $data->penduduk->nama }}</option>
                                        @endforeach
                                    @elseif ($datacetak == 'kk')
                                        @foreach ($datakks as $data)
                                            <option value={{ $data->id }}>{{ $data->nama_kem }}</option>
                                        @endforeach
                                    @elseif ($datacetak == 'k')
                                        @foreach ($datakks as $data)
                                            <option value={{ $data->id }}>{{ $data->nama_lahir }}</option>
                                        @endforeach
                                    @elseif ($datacetak == 'ktp')
                                        @foreach ($datakks as $data)
                                            <option value={{ $data->id }}>{{ $data->penduduk->nama }}</option>
                                        @endforeach
                                    @elseif ($datacetak == 'm')
                                        @foreach ($datakks as $data)
                                            <option value={{ $data->id }}>{{ $data->penduduk->nama }}</option>
                                        @endforeach
                                    @endif

                                </select>
                                <input type="hidden" name="datacetak" id="datacetak" value="{{ $datacetak }}">
                                <button type="button submit" id="submit" name="submit"
                                    class="btn btn-success btn-sm mb-2 add">Cetak</button>
                            </div>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->



        </div> <!-- container -->

    </div> <!-- content -->
@endsection
@push('addon-script')
    <script>
        var url = window.location.origin;
        $('#submit').on('click', function(id) {
            var idpenduduk = $("#id_penduduk").val();
            var datacetak = $("#datacetak").val();
            console.log(datacetak);

            var ini = "{{ url('/cetak/') }}" + "/" + datacetak + "?id_penduduk=" + idpenduduk;
            console.log(ini);
            window.open(ini, "_blank");

        });
    </script>
@endpush
