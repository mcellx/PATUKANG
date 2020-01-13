<?php
session_start();
include 'konek.php';

$rating=$_POST['rating'];
$id_tukang = $_POST['id_tukang'];

if($rating==1) {
 $data="UPDATE tb_tukang SET rating='1' where id_tukang='$id_tukang'";
 $query=mysqli_query($link,$data);
 if ($query) {
   $status= mysqli_query($link,"UPDATE tb_sewa SET status_sewa='4' where id_tukang='$id_tukang'");
   header("location:contact.php");
 }
}
elseif($rating==2) {
 $data="UPDATE tb_tukang SET rating='2' where id_tukang='$id_tukang'";
 $query=mysqli_query($link,$data);
 if ($query) {
   $status= mysqli_query($link,"UPDATE tb_sewa SET status_sewa='4' where id_tukang='$id_tukang'");
   header("location:contact.php");
 }
}
elseif($rating==3) {
 $data="UPDATE tb_tukang SET rating='3' where id_tukang='$id_tukang'";
 $query=mysqli_query($link,$data);
 if ($query) {
   $status= mysqli_query($link,"UPDATE tb_sewa SET status_sewa='4' where id_tukang='$id_tukang'");
   header("location:contact.php");
 }
}
elseif($rating==4) {
 $data="UPDATE tb_tukang SET rating='4' where id_tukang='$id_tukang'";
 $query=mysqli_query($link,$data);
 if ($query) {
   $status= mysqli_query($link,"UPDATE tb_sewa SET status_sewa='4' where id_tukang='$id_tukang'");
   header("location:contact.php");
 }
}
elseif($rating==5) {
 $data="UPDATE tb_tukang SET rating='5' where id_tukang='$id_tukang'";
 $query=mysqli_query($link,$data);
 if ($query) {
   $status= mysqli_query($link,"UPDATE tb_sewa SET status_sewa='4' where id_tukang='$id_tukang'");
   header("location:contact.php");
 }
}
else{
  echo "rating gagal";
}

?>