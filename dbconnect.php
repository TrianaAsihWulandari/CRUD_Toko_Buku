<?php
$host = "sql200.epizy.com";
$user = "epiz_31831378";
$password = "hCi1H69EqxVfun7";
$dbname = "epiz_31831378_buku";
$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
 die("error in connection");
}

//echo "database connected"
