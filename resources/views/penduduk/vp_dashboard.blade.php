@extends('layouts.vl_penduduk')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Welcome !</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="knob-chart" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                        data-bgColor="#ebefff" value="{{ $npenduduk }}" data-skin="tron"
                                        data-angleOffset="0" data-readOnly=true data-thickness=".15" />
                                </div>
                                <div class="text-right">
                                    <h3 class="mb-1 mt-0"> <span data-plugin="counterup">{{ $npenduduk }}</span>
                                    </h3>
                                    <p class="text-muted mb-0">Penduduk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="knob-chart" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                        data-bgColor="#ebefff" value="{{ $nkks }}" data-skin="tron"
                                        data-angleOffset="0" data-readOnly=true data-thickness=".15" />
                                </div>
                                <div class="text-right">
                                    <h3 class="mb-1 mt-0"> <span data-plugin="counterup">{{ $nkks }}</span>
                                    </h3>
                                    <p class="text-muted mb-0">Kartu Keluarga</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="knob-chart" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                        data-bgColor="#ebefff" value="{{ $nlaki }} " data-skin="tron"
                                        data-angleOffset="0" data-readOnly=true data-thickness=".15" />
                                </div>
                                <div class="text-right">
                                    <h3 class="mb-1 mt-0"> {{ $nlaki }} </h3>
                                    <p class="text-muted mb-0">Laki - Laki</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="knob-chart" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                        data-bgColor="#ebefff" value="{{ $nperempuan }}" data-skin="tron"
                                        data-angleOffset="0" data-readOnly=true data-thickness=".15" />
                                </div>
                                <div class="text-right">
                                    <h3 class="mb-1 mt-0"> {{ $nperempuan }} </h3>
                                    <p class="text-muted mb-1">Perempuan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="knob-chart" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                        data-bgColor="#ebefff" value="{{ $nlahir }}" data-skin="tron"
                                        data-angleOffset="0" data-readOnly=true data-thickness=".15" />
                                </div>
                                <div class="text-right">
                                    <h3 class="mb-1 mt-0"> <span data-plugin="counterup">{{ $nlahir }}</span>
                                    </h3>
                                    <p class="text-muted mb-0">Lahir</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="knob-chart" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                        data-bgColor="#ebefff" value="{{ $nkematian }}" data-skin="tron"
                                        data-angleOffset="0" data-readOnly=true data-thickness=".15" />
                                </div>
                                <div class="text-right">
                                    <h3 class="mb-1 mt-0"> <span data-plugin="counterup">{{ $nkematian }}</span>
                                    </h3>
                                    <p class="text-muted mb-0">Meninggal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="knob-chart" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                        data-bgColor="#ebefff" value="{{ $npendatang }}" data-skin="tron"
                                        data-angleOffset="0" data-readOnly=true data-thickness=".15" />
                                </div>
                                <div class="text-right">
                                    <h3 class="mb-1 mt-0"> {{ $npendatang }} </h3>
                                    <p class="text-muted mb-0">Pendatang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="knob-chart" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                        data-bgColor="#ebefff" value="{{ $npindah }}" data-skin="tron"
                                        data-angleOffset="0" data-readOnly=true data-thickness=".15" />
                                </div>
                                <div class="text-right">
                                    <h3 class="mb-1 mt-0"> {{ $npindah }} </h3>
                                    <p class="text-muted mb-1">Pindah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>



        </div> <!-- container -->

    </div> <!-- content -->
@endsection
