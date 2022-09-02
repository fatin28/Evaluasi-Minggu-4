<?php
// Koneksi ke database
$connect = mysqli_connect("localhost","root","","jamu");
$output = '';
$query = '';

// Jika variabel keyword memiliki isi
if(isset($_POST["keyword"])){

  // Jika keyword tidak kosong
  $search = str_replace(",", "|", $_POST["keyword"]);
  $query = "
      SELECT * FROM produk 
      WHERE nama_produk REGEXP '".$search."' 
      OR harga_produk REGEXP '".$search."' 
      OR jenis_produk REGEXP '".$search."'
  ";

}else{

  // Jika Keyword kosong
  $query = "SELECT * FROM produk ORDER BY id_produk";

}

// Mengambil datanya
$get_data = mysqli_query($connect,$query);
// Mengubah datanya kedalam bentuk array
while($row = mysqli_fetch_array($get_data)){
 $data[] = $row;
}

// Mengubah array ke JSON
echo json_encode($data);


