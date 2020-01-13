<?php
// Load file koneksi.php
include "konek.php";
// Ambil Data yang Dikirim dari Form

$id_sewa = $_POST['id_sewa'];
$no_rek_cus = $_POST['no_rek_cus'];
$tgl_pemb = date('Y-m-d H:i:s');
$foto_transaksi = $_FILES['foto_transaksi']['name'];
$tmp = $_FILES['foto_transaksi']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('Y-m-d').'-'.$foto_transaksi;
// Set path folder tempat menyimpan fotonya
$path = "file/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO tb_pembayaran_cus VALUES('','$id_sewa','$no_rek_cus','$tgl_pemb','$fotobaru','0')";
  $sql = mysqli_query($link, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
     $query2 = "UPDATE tb_sewa SET status_sewa='5' where id_sewa='$id_sewa'";
     $sql = mysqli_query($link, $query2);
    header("location: contact.php"); // Redirect ke halaman index.php
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