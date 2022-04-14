<html>

<head>
    <title>Form Input Mahasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mahasiswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode" placeholder="Input Nama">
                    </td>
                </tr>
                <tr>
                    <th>Nis</th>
                    <th>:</th>
                    <td>
                        <input type="number" name="nama" id="nama" placeholder="Input Nis">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kelas" id="kelas" placeholder="Input Kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" name="tanggal" id="tanggal" placeholder="Input Tanggal lahir">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tempat" id="tempat" placeholder="Input tempat Lahir">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="alamat" id="alamat" placeholder="Input Alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki">Laki-Laki<br>
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">Perempuan<br>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td>
                        <select name="agama" id="agama">
                            <option name="agama" id="agama" value="Islam">Islam</option>
                            <option name="agama" id="agama" value="Kristen">Kristen</option>
                            <option name="agama" id="agama" value="Katolik">Katolik</option>
                            <option name="agama" id="agama" value="Budha">Budha</option>
                            <option name="agama" id="agama" value="Hindu">Hindu</option>
                            <option name="agama" id="agama" value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>