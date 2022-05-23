<!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan Kartu Tanda Pengenal</title>
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
        <font size="3"><u>SURAT KETERANGAN KARTU TANDA PENGENAL</u></font><br>
        <br>
        <table width="525">
            <tr class="text2">
                <td>
                    Yang bertanda tangan dibawah ini, kami Kepala Desa Libureng, Kecamatan Tanete Riaja, Kabupaten
                    Barru, menerangkan dengan sebenarnya kepada :
                </td>
            </tr>
        </table>
        <table width="525">
            <tr>
                <td width="30"></td>
                <td width="110">Nama Lengkap</td>
                <td>: {{ $nama }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Jenis Kelamin</td>
                <td>: {{ $jenis_kelamin }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Tempat/Tgl.Lahir</td>
                <td>: {{ $tempat_lahir }}, {{ date('d/m/Y', strtotime($tanggal_lahir)) }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Agama</td>
                <td>: {{ $agama }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Pendidikan Terakhir</td>
                <td>: {{ $pendidikan }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Status Perkawinan</td>
                <td>: {{ $status }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Pekerjaan</td>
                <td>: {{ $pekerjaan }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Alamat</td>
                <td>: Desa : {{ $desa_ktps }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>: Ds/Kec : {{ $kec_ktps }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>: Kab : {{ $kab_ktps }}</td>
            </tr>
            <tr>
                <td></td>
                <td>NIK</td>
                <td>: {{ $nik }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Dipergunakan Untuk</td>
                <td>: KTP Sementara</td>
            </tr>
            <tr>
                <td></td>
                <td>Keterangan Lain-lain</td>
                <td>: Bahwa orang tersebut diatas adalah benar-benar penduduk Desa Libureng,</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Kecamatan Tanete Riaja,
                    Kab.Barru dan sampai surat Keterangan ini Diterbitkan.</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Dan KTP masih dalam proses pembuatan.</td>
            </tr>
        </table>
        <table width="525">
            <tr class="text2">
                <td>Demikian Surat Keterangan ini dibuat untuk dipergunakan sebagaimana mestinya dan untuk menjadikan
                    periksa adanya.</td>
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
