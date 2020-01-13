<?php
session_start();
$nam_leng = $_SESSION['nam_leng'];
include 'konek.php';

if (isset($_POST['Submit'])) {

  $id_customer=$_POST['id_customer'];
  $Keahlian=$_POST['Keahlian'];
  $harga_tukang=$_POST['harga_tukang'];
  $no_rek=$_POST['no_rek'];
  $foto_ktp = $_FILES['foto_ktp']['name'];
  $tmp = $_FILES['foto_ktp']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = $foto_ktp;
  // Set path folder tempat menyimpan fotonya
  $path = "file/".$fotobaru;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){

      $a="insert into tb_tukang values ('','$id_customer','$Keahlian','$harga_tukang','$no_rek','')";
      $input=mysqli_query($link,$a);
        if ($input) {
          $query="UPDATE tb_customer SET status_tukang='1',foto_ktp='$fotobaru' where id_customer='$id_customer'";
            $sql= mysqli_query($link, $query);
          if ($sql) {
            $r= mysqli_fetch_array($sql);
      header("location:beranda.php?user=$nam_leng");
    }
  }
}
}
 ?>