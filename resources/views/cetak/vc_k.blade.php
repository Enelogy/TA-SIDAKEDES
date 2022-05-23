<!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan Kelahiran</title>
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
        <font size="3"><u>SURAT KETERANGAN KELAHIRAN</u></font><br>
        <br>
        <table width="525">
            <tr class="text2">
                <td>
                    Yang bertanda tangan dibawah ini, Kepala Desa Libureng Kecamatan Tanete riaja Kabupaten barru
                </td>
            </tr>
            <tr class="text2">
                <td>
                    Dengan ini menerangkan bahwa :
                </td>
            </tr>
        </table>
        <table width="525">
            <tr>
                <td width="30"></td>
                <td width="110">Nama</td>
                <td>: {{ $nama_lahir }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Tempat, Tanggal Lahir</td>
                <td>: {{ $ttl_lahir }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Jenis Kelamin</td>
                <td>: {{ $jk_lahir }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Alamat</td>
                <td>: {{ $alamat_lahir }}</td>
            </tr>
        </table>
        <table width="525">
            <tr class="text2">
                <td>Adalah anak dari :</td>
            </tr>
        </table>
        <table width="525">
            <tr>
                <td width="30"></td>
                <td width="110">Nama Ayah Kandung</td>
                <td>: {{ $ayah_lahir }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Nama Ibu Kandung</td>
                <td>: {{ $ibu_lahir }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Anak Ke</td>
                <td>: {{ $anak_ke }}</td>
            </tr>
        </table>
        <table width="525">
            <tr class="text2">
                <td>Demikian surat keterangan kelahiran ini dibuat untuk dapat dipergunakan seperlunya</td>
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
