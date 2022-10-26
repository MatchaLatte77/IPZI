<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM data_pelanggaran WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: Listpelanggaran.php');
    } else {
        die("Maaf, Data gagal Dihapus!");
    }

} else {
    die("Dilarang Menghapus Data");
}

?>
