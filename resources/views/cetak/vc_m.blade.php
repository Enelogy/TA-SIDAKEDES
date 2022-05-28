<!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan Pindah Penduduk</title>
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
        <font size="3"><u>SURAT KETERANGAN PINDAH PENDUDUK</u></font><br>
        <font size="3">Nomor: / DL-TRJ / VI / 2022</font><br>
        <br>
        <table width="525">
            <tr>
                <td>1.</td>
                <td width="110">Nama Lengkap</td>
                <td>: {{ $nama }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Jenis Kelamin</td>
                <td>: {{ $jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Dilahirkan</td>
                <td>: {{ $tempat_lahir }}, {{ date('d/m/Y', strtotime($tanggal_lahir)) }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Kewarganegaraan</td>
                <td>: {{ $kewarganegaraan }}</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Agama</td>
                <td>: {{ $agama }}</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Status Perkawinan</td>
                <td>: {{ $status }}</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Pekerjaan</td>
                <td>: {{ $pekerjaan }}</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Nama Orangtua</td>
                <td>: Ayah : {{ $ayah }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>: ibu : {{ $ibu }}</td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Pendidikan Terakhir</td>
                <td>: {{ $pendidikan }}</td>
            </tr>
            <tr>
                <td>10.</td>
                <td>Alamat Asal</td>
                <td>: {{ $alamat }}</td>
            </tr>
            <tr>
                <td>11.</td>
                <td>KK / NIK</td>
                <td>: {{ $kk }} / {{ $nik }}</td>
            </tr>
            <tr>
                <td>12.</td>
                <td>Pindah Ke</td>
                <td>: {{ $alamat_tujuan }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>: Desa/Kelurahan : {{ $desa_migrasi }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>: Kecamatan : {{ $kec_migrasi }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>: Kab. / Kota : {{ $kab_migrasi }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>: Porvinsi : {{ $prov_migrasi }}</td>
            </tr>
            <tr>
                <td>13.</td>
                <td>Pada Tanggal</td>
                <td>: {{ date('d/m/Y', strtotime($tgl_migrasi)) }}</td>
            </tr>
            <tr>
                <td>14.</td>
                <td>Alasan Pindah</td>
                <td>: {{ $alasan_migrasi }}</td>
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
