<?php 
   $hostname = "localhost";
   $user = "root";
   $password = "";
   $database_name = "posttest6";

   // $conn = mysqli_connect($hostname,$user,$password,$database_name);

   // if(!$conn) {
   //    die("gagal terhubung ke database". mysqli_connect_error());
   // }

   $koneksi = mysqli_connect($hostname, $user, $password, $database_name)or die(mysqli_error($koneksi));
?>