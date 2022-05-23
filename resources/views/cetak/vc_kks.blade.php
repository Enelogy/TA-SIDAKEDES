<!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan Kartu Keluarga</title>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: rgb(255, 255, 255);
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
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>
        <font size="3"><u>SURAT KETERANGAN KARTU KELUARGA</u></font><br>
        <br>
        <table width="525">
            <tr class="text2">
                <td>
                    Yang bertanda tangan dibawah ini, Kepala Desa Libureng Kecamatan Tanete Riaja Kabupaten Barru
                </td>
            </tr>
            <tr class="text2">
                <td>
                    Menerangkan Bahwa :
                </td>
            </tr>
        </table>
        <table width="525">
            @foreach ($datapenduduk as $n)
                <tr>
                    <td width="30">{{ $no++ }}.</td>
                    <td width="110">Nama</td>
                    <td>: {{ $n->nama }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tempat Tanggal Lahir</td>
                    <td>: {{ $n->tempat_lahir }}, {{ date('d/m/Y', strtotime($n->tanggal_lahir)) }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pekerjaan</td>
                    <td>: {{ $n->pekerjaan }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Alamat</td>
                    <td>: {{ $n->alamat }} Tahun</td>
                </tr>
                <br>
            @endforeach
        </table>
        <table width="525">
            <tr class="text2">
                <td>Adalah benar penduduk Desa Libureng Kecamatan Tanete Riaja Kabupaten Barru dan surat keterangan ini
                    dikeluarkan sebagai pengganti Kartu Keluarga Sementara yang masih dalam urusan.</td>
            </tr>
        </table>
        <table width="525">
            <tr class="text2">
                <td>Demikian Demikian Surat keterangan keterangan ini diperbuat diperbuat dengan sebenarnya -sebenarnya
                    untuk dapat dipergunakan dipergunakan seperlunya. seperlunya.</td>
            </tr>
        </table>

        <br>
        <table width="525">
            <tr>
                <td class="text2">Barru, {{ date('d M Y') }}</td>
            </tr>
        </table>
        <table width="525">
            <tr>
                <td width="330"><br><br><br><br></td>
                <td class="text" align="center">Kepala Desa<br><br><br><br><u>H. IKBAL BASRI</u></td>
            </tr>
        </table>
    </center>
</body>

</html>
