<?php
include 'konek.php';

// cek apakah tombol Simpan sudah diklik atau blum?
if (isset($_POST['submit'])) {
  // ambil data dari formulir
  $id_customer=$_POST['id_customer'];
  $id_tukang=$_POST['id_tukang'];
  $alamat_sewa=$_POST['alamat_sewa'];
  $luas_sewa=$_POST['luas_sewa'];
  $detail_sewa=$_POST['detail_sewa'];
  $total_sewa=$_POST['total_sewa'];
  $tgl_sewa=$_POST['tgl_sewa'];
  $status_sewa=$_POST['status_sewa'];

  $a="insert into tb_sewa values ('','$id_customer','$id_tukang','$alamat_sewa','$luas_sewa','$detail_sewa','$total_sewa','$tgl_sewa','date_timezone_set()','0')";
  $input=mysqli_query($link,$a);
  if ($input) {
   header('location:beranda.php');
  }
  else{
    echo "gagal memesan";
  }
}
 ?>