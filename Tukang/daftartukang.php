<!DOCTYPE html>
<?php
session_start();
$r=$_SESSION['id_customer'];
  $nam_leng = $_SESSION['nam_leng'];
?>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Pa-Tukang | Daftar Tukang</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="patukang.png">
  
  <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/plugins.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/uhuy.css">

</head>

<body>
   <div class="container-fixed" style="margin-left:50px;margin-right:50px;">
 <header id="wn_header" class="header__area header__absolute sticky menu" style="margin-left:50px;margin-right:50px;">
      <div class="container-fixed">
        <ul class="topnav"> 

          <lia style="padding-left: 30px">
        <?php
        echo "<a href='beranda.php?user=$nam_leng'>"
        ?>
          <img src="patukang.png" width="70">
          <?php
        echo "</a>";
        ?>
        </lia>
        
                    <li style="padding-top: 20px">
                    <a class="nav-link" href="keluar.php">      
                      <i class="fa fa-power-off"></i> | Keluar
                    </a>
                    </li>
                    
                      <li style="padding-top: 20px">
                      <?php
                    echo "<a class='nav-link' href='contact.php?user=$nam_leng'>"
                    ?>
                      <i class="fa fa-user-circle"></i> | Profil
                    <?php
                    echo"</a>";
                    ?>
                    </li>
                <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                <li class="icon" style="padding-top:20px;padding-right:20px">
                  <a href="javascript:void(0);" onclick="myFunction()"><i class="fa fa-list"></i></a>
                  </li>
              
              </ul> 
        </div>
    </header>

    <div class="row justify-content-center">  
      <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 50px;padding-top: 50px">
        <p style="text-align: center;font-family;font-size:20px">Ayo Daftar Menjadi PA-TUKANG !</p>
        <table >
          <tr>
          <td>
        <img src="patukang.png" width="200">      
      </td>
    <td>
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                  <form class="user" method="post" action="checktukang.php"  enctype="multipart/form-data">
                    <div class="form-group">
                        <input hidden="true" value="<?=$_SESSION['id_customer'];?>" name="id_customer">
                    </div>
                       <div class="form-group">
                        <select class="form-control form-control-user" name="Keahlian">
                        <option value="" hidden="true">Pilih Jenis Keahlian</option>
                        <option value="Tukang Alumunium">Tukang Alumunium</option>
                        <option value="Tukang Keramik">Tukang Keramik</option>
                        <option value="Tukang Atap">Tukang Atap</option>
                        <option value="Tukang Cat">Tukang Cat</option>
                        <option value="Tukang Plafon">Tukang Plafon</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="harga_tukang" placeholder="Harga Jasa Tukang">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="no_rek" placeholder="No.Rekening">
                    </div>
                    <div class="form-group">
                      <n style="color: red">*</n>Upload KTP &nbsp;&nbsp;<input type="file" name="foto_ktp" style="font-size: 10px">
                    </div>
                  <input class="btn btn-primary btn-user btn-block" type="submit" name="Submit" value="Daftar">
                </form>
              </div>
            </div>
          </div>
    </td>
     </tr>
      </table>
    </div>
  </div>

<footer >
         <div class="row">    
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="footer__widget footer__menu">
                <div class="ft__logo">  
                  <div style="text-align: center; font-style: italic; padding-top: 10px"><h style="color: orange">Patukang.com</h> adalah website penyewaan jasa tukang yang tepat untuk menyelesaikan masalah Anda. Dengan menyediakan banyak jasa tukang sesuai dengan yang Anda butuhkan.</div>
                </div>  
              <div class="copyright">
                <div class="copy__right__inner text-left">
                  <li style="text-align: center">Copyright <i class="fa fa-copyright"></i><a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</li>
                </div>
              </div>
              </div>
            </div>
        </div>
        </footer>
      </div>

<script src="js/uhuy.js"></script>

</body>
</html>
