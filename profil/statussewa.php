<?php
session_start();
include 'konek.php';

$id_tukang=$_GET['id_tukang'];

  $query="UPDATE tb_sewa SET status_sewa='1' where id_tukang='$id_tukang'";
  $sql= mysqli_query($link, $query);
  if ($sql) {
  $r=$_SESSION['id_tukang'];
  $data =mysqli_query($link,"select * from tb_sewa where id_tukang='$id_tukang'");
  $cekdata= mysqli_fetch_array($data);
  if ($cekdata){
  header("location:profiltukang.php?id_tukang=$cekdata[id_tukang]");
}
}
?>