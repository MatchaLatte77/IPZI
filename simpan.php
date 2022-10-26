<?php

include("config.php");

if(isset($_POST['simpan'])){

    $nama = $_POST['Nama'];
    $nis = $_POST['NIS'];
    $jurusan = $_POST['Jurusan'];
    $kelas = $_POST['Kelas'];
    $kategori = $_POST['Kategori'];
    $deskripsi = $_POST['Deskripsi'];
    $tanggalpelanggaran = $_POST['TanggalPelanggaran'];

    $sql = "INSERT INTO data_pelanggaran (Nama, NIS, Jurusan, Kelas, Kategori, Deskripsi, TanggalPelanggaran) VALUE ('$nama', ' $nis','$jurusan', '$kelas', '$kategori', '$deskripsi', '$tanggalpelanggaran')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
