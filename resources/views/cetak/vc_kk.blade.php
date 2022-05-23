<!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan Kematian</title>
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
        <font size="3"><u>SURAT KEMATIAN</u></font><br>
        <br>
        <table width="525">
            <tr class="text2">
                <td>
                    Yang bertanda tangan dibawah ini,
                </td>
            </tr>
            <tr class="text2">
                <td>
                    Menerangkan Bahwa :
                </td>
            </tr>
        </table>
        <table width="525">
            <tr>
                <td width="30"></td>
                <td width="40">Nama</td>
                <td>: {{ $nama_kem }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Kelamin</td>
                <td>: {{ $jk_kem }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Alamat</td>
                <td>: {{ $alamat_kem }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Umur</td>
                <td>: {{ $umur_kem }} Tahun</td>
            </tr>
        </table>
        <table width="525">
            <tr class="text2">
                <td>Telah Meninggal Dunia Pada :</td>
            </tr>
        </table>
        <table width="525">
            <tr>
                <td width="30"></td>
                <td width="40">Hari</td>
                <td>: {{ $hari }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Tanggal</td>
                <td>: {{ $tanggal }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Di</td>
                <td>: {{ $tmpt_kem }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Penyebab</td>
                <td>: {{ $penyebab }}</td>
            </tr>
        </table>
        <table width="525">
            <tr class="text2">
                <td>Surat keterangan ini dibuat atas dasar Yang sebenarnya.</td>
            </tr>
        </table>
        <table width="525">
            <tr>
                <td width="30"></td>
                <td width="20">Pelapor</td>
                <td>: {{ $nama_pelapor }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Hubungan</td>
                <td>: {{ $hub_kem }}</td>
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
