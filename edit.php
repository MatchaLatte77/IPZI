<?php

include("config.php");


if(isset($_POST['simpan'])){

    // mengambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['Nama'];
    $nis = $_POST['NIS'];
    $jurusan = $_POST['Jurusan'];
    $kelas = $_POST['Kelas'];
    $kategori = $_POST['Kategori'];
    $deskripsi = $_POST['Deskripsi'];
    $tanggalpelanggaran = $_POST['TanggalPelanggaran'];


    // update
    $sql = "UPDATE data_pelanggaran SET Nama='$nama', NIS='$nis', Jurusan='$jurusan', Kelas='$kelas', Kategori='$kategori', Deskripsi='$deskripsi', TanggalPelanggaran='$tanggalpelanggaran' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
        header('Location: Listpelanggaran.php');
    } else {
        die("Maaf,Perubahan yang dilakukan gagal");
    }


} else {
    die("Dilarang melakukan perubahan data");
}

?>
