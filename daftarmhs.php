<?php
    include('crudMhs.php');

    session_start();
    if (!isset($_SESSION['username'])){
    header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>DaftarMahasiswa</title>
</head>

<body>
    <h2>DaftarMahasiswa</h2>
    <?php
        $data = bacaSemuaMhs();

        if ($data == null) {
            echo "Tidak ada data mahasiswa";
        } else {
    ?>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>JenisKelamin</th>
            <th>Jurusan</th>
        </tr>

        <?php
            foreach($data as $mhs){
                $nim = $mhs['nim'];
                $nama = $mhs['nama'];
                $kelamin = $mhs['kelamin'];
                $jurusan = $mhs['jurusan'];

                echo "
                <tr>
                <td>$nim</td>
                <td>$nama</td>
                <td>$kelamin</td>
                <td>$jurusan</td>
                </tr>
                ";
            }
             echo '</table>';
        }
    ?>

        <br>
        <a href="tambahmhs.php">Tambah Data Mahasiswa</a>
</body>

</html>