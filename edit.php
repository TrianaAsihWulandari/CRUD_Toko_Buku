<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id_bk'];
$judul = $_GET['judul_buku'];
$penulis = $_GET['penulis_buku'];
$penerbit = $_GET['penerbit_buku'];

//query update
$query = "UPDATE buku SET judul_buku='$judul' , penulis_buku='$penulis' , penerbit_buku='$penerbit'  WHERE id_buku='$id' ";

if (mysqli_query($conn, $query)) {
    # credirect ke page index
    header("location:index.php");
} else {
    echo "ERROR, data gagal diupdate" . mysqli_error($conn);
}

mysqli_close($conn);
