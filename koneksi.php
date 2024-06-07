<?php

$server = "localhost";
$username = "root"
$password = "";
$database_name = "DatabaseBagas";

$koneksi = mysqli_connect($server,$username,$password,$database_name);

if ($koneksi) {
    echo "Berhasil Konek Database";
} else{
    echo "Gagal Konek";
}


?>
