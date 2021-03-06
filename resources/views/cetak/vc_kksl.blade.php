<!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan Kartu Keluarga</title>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 1px;
            border-color: rgb(0, 0, 0);
        }

        table tr .text2 {
            text-align: right;
            font-size: 15px;
        }

        table tr .text {
            text-align: right;
            font-size: 15px;
        }

        table tr td {
            font-size: 15px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <center>
        <table>
            <tr>
                <td><img src="{{ asset('gambar/logo.png') }}" width="70" height="70"></td>
                <td width="450">
                    <center>
                        <font size="4">PEMERINTAH KABUPATEN BARRU</font><br>
                        <font size="4">KECAMATAN TANETE RIAJA</font><br>
                        <font size="4">KANTOR DESA LIBURENG
                        </font>
                    </center>
                </td>
            </tr>

        </table>
        <br>
        <font size="3"><u>LAPORAN DATA {{ $nama_laporan }}</u></font><br>
        <br>

        @if ($nama_laporan == 'KARTU KELUARGA')
            <table width="525">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datakksl as $n)
                        <tr>
                            <td>
                                <center>{{ $no++ }}</center>
                            </td>
                            <td>
                                <center>{{ $n->nik }}</center>
                            </td>
                            <td>
                                <center>{{ $n->nama }}</center>
                            </td>
                            <td>
                                <center>{{ $n->tempat_lahir }}</center>
                            </td>
                            <td>
                                <center>{{ $n->tanggal_lahir }}</center>
                            </td>
                            <td>
                                <center>
                                    @if ($n->status_kks == 0)
                                        Belum Diverifikasi
                                    @elseif ($n->status_kks == 1)
                                        Diterima
                                    @else
                                        Ditolak
                                    @endif
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif ($nama_laporan == 'KELAHIRAN')
            <table width="525">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Bayi</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Ayah</th>
                        <th>Ibu</th>
                        <th>KK</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datakksl as $n)
                        <tr>
                            <td>
                                <center>{{ $no++ }}</center>
                            </td>
                            <td>
                                <center>{{ $n->nama }}</center>
                            </td>
                            <td>
                                <center>{{ date('d-m-Y', strtotime($n->tanggal_lahir)) }}</center>
                            </td>
                            <td>
                                <center>{{ $n->jenis_kelamin }}</center>
                            </td>
                            <td>
                                <center>{{ $n->ayah }}</center>
                            </td>
                            <td>
                                <center>{{ $n->ibu }}</center>
                            </td>
                            <td>
                                <center>{{ $n->kk }}</center>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif ($nama_laporan == 'KEMATIAN')
            <table width="525">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Almarhum</th>
                        <th>Jenis Kelamin</th>
                        <th>Sebab Kematian</th>
                        <th>Tanggal Kematian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datakksl as $n)
                        <tr>
                            <td>
                                <center>{{ $no++ }}</center>
                            </td>
                            <td>
                                <center>{{ $n->nama }}</center>
                            </td>
                            <td>
                                <center>{{ $n->jenis_kelamin }}</center>
                            </td>
                            <td>
                                <center>{{ $n->sebab_sk }}</center>
                            </td>
                            <td>
                                <center>{{ $n->tgl_sk }}</center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif ($nama_laporan == 'PINDAH / PENDATANG')
            <table width="525">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Pindah</th>
                        <th>Alasan Pindah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datakksl as $n)
                        <tr>
                            <td>
                                <center>{{ $no++ }}</center>
                            </td>
                            <td>
                                <center>{{ $n->nik }}</center>
                            </td>
                            <td>
                                <center>{{ $n->nama }}</center>
                            </td>
                            <td>
                                <center>{{ $n->jenis_kelamin }}</center>
                            </td>
                            <td>
                                <center>{{ $n->tgl_migrasi }}</center>
                            </td>
                            <td>
                                <center>{{ $n->alasan_migrasi }}</center>
                            </td>
                            <td>
                                <center>
                                    @if ($n->status_migrasi == 0)
                                        Belum Diverifikasi
                                    @elseif ($n->status_migrasi == 1)
                                        Diterima
                                    @else
                                        Ditolak
                                    @endif
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif ($nama_laporan == 'KARTU TANDA PENDUDUK')
            <table width="525">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datakksl as $n)
                        <tr>
                            <td>
                                <center>{{ $no++ }}</center>
                            </td>
                            <td>
                                <center>{{ $n->nik }}</center>
                            </td>
                            <td>
                                <center>{{ $n->nama }}</center>
                            </td>
                            <td>
                                <center>{{ $n->tempat_lahir }}</center>
                            </td>
                            <td>
                                <center>{{ $n->tanggal_lahir }}</center>
                            </td>
                            <td>
                                <center>
                                    @if ($n->status_ktps == 0)
                                        Belum Diverifikasi
                                    @elseif ($n->status_ktps == 1)
                                        Diterima
                                    @else
                                        Ditolak
                                    @endif
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif ($nama_laporan == 'PINDAH')
            <table width="525">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penduduk</th>
                        <th>Jenis Kelamin</th>
                        <th>Sebab</th>
                        <th>Tanggal Pindah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datakksl as $n)
                        <tr>
                            <td>
                                <center>{{ $no++ }}</center>
                            </td>
                            <td>
                                <center>{{ $n->nama }}</center>
                            </td>
                            <td>
                                <center>{{ $n->jenis_kelamin }}</center>
                            </td>
                            <td>
                                <center>{{ $n->alasan_sp }}</center>
                            </td>
                            <td>
                                <center>{{ $n->tgl_pindah }}</center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif ($nama_laporan == 'PENDATANG')
            <table width="525">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pendatang</th>
                        <th>Jenis Kelamin</th>
                        <th>Pelapor</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datakksl as $n)
                        <tr>
                            <td>
                                <center>{{ $no++ }}</center>
                            </td>
                            <td>
                                <center>{{ $n->nama }}</center>
                            </td>
                            <td>
                                <center>{{ $n->jenis_kelamin }}</center>
                            </td>
                            <td>
                                <center>{{ $n->pelapor }}</center>
                            </td>
                            <td>
                                <center>{{ $n->tgl_datang }}</center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        @endif



    </center>
</body>

</html>
