<?php
//add dbconnect

include('dbconnect.php');

$judul = $_POST['judul_buku'];
$penulis = $_POST['penulis_buku'];
$penerbit = $_POST['penerbit_buku'];

//query

$query =  "INSERT INTO buku(judul_buku , penulis_buku , penerbit_buku ) VALUES('$judul' , '$penulis' , '$penerbit' )";

if (mysqli_query($conn, $query)) {
    # code redicet setelah insert ke index
    header("location:index.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($conn);
}

mysqli_close($conn);
