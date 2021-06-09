<?php
require_once 'koneksiakad.php';
// membaca (select) tabelmahasiswa
// jikaberhasil, hasil array drbaris-baris data
// dansetiapbaris data berupa array darinama-nama field
// jikatidakada,hasilberupanilai null

Function bacaMhs($sql){
$data = array();
$koneksi = koneksiAkademik();
$hasil = mysqli_query($koneksi, $sql);
// jikatidakada record, hasilberupa null
if (mysqli_num_rows($hasil) == 0) {
mysqli_close($koneksi);
return null;
}
$i=0;
while($baris = mysqli_fetch_assoc($hasil)){
$data[$i]['nim']= $baris['nim'];
$data[$i]['nama'] = $baris['nama'];
$data[$i]['kelamin'] = $baris['kelamin'];
$data[$i]['jurusan'] = $baris['jurusan'];
$i++;
}
mysqli_close($koneksi);
return $data;
}
// Menambahkan Fungsi "bacaSemuaMhs" 1
Function bacaSemuaMhs(){
    return bacaMhs("select*from mahasiswa");
}

// Menambahkan Fungsi "bacaMhsPerjurursan"2
Function bacaMhsPerJurusan($jurusan){
    return bacaMhs("select*from mahasiswa where jurusan = '$jurusan'");
}

// Menambahkan Fungsi "cariMhsDariNim" 3
function cariMhsDariNim($nim){
        return bacaMhs("select*from mahasiswa where nim = '$nim'");
}