<?php
session_start();
include 'konek.php';
$r=$_SESSION['id_customer'];
// Ambil Data yang Dikirim dari Form
$foto_diri = $_FILES['foto_diri']['name'];
$tmp = $_FILES['foto_diri']['tmp_name'];
// Set path folder tempat menyimpan fotonya
$path = "file/".$foto_diri;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "UPDATE tb_customer SET foto_diri='$foto_diri' where id_customer='$r'";
  $sql = mysqli_query($link, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
      header("location:contact.php?id_customer=$r"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>