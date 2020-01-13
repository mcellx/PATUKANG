<?php
session_start();
include 'konek.php';

$id_tukang=$_GET['id_tukang'];

  $query="UPDATE tb_sewa SET status_sewa='2' where id_tukang='$id_tukang'";
  echo $query ;
  $sql= mysqli_query($link, $query);
  if ($sql) {
  
  $data =mysqli_query($link,"select * from tb_sewa where id_tukang='$id_tukang'");
  $cekdata= mysqli_fetch_array($data);
  if ($cekdata){
  header("location:profiltukang.php?id_tukang=$cekdata[id_tukang]");
}
}
?>