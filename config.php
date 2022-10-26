<?php

$server = "localhost";
$user = "root";
$password = "siwabessy007";
$nama_database = "data_pelanggaran";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
