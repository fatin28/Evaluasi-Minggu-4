<?php
include "koneksi.php";

$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$jenis_produk = $_POST['jenis_produk'];

// Ambil Data yang Dikirim dari Form upload
$nama_file = $_FILES['foto']['name'];
$tmp_file = $_FILES['foto']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "upload/" . $nama_file;
if (move_uploaded_file($tmp_file, $path)) {
    $sql = "INSERT INTO produk (nama_produk, harga_produk, jenis_produk, foto_produk) VALUES ('" . $nama_produk . "','" . $harga_produk . "','" . $jenis_produk . "','" . $nama_file . "')";
    // Eksekusi/ Jalankan query dari variabel $query
    $sql = mysqli_query($connect, $sql);
    header("location: view_admin.php");
} else {
    header("location: view_admin.php");
}
