<!DOCTYPE html>
<?php
session_start();
include 'konek.php';
$r=$_SESSION['id_customer'];
$nam_leng = $_SESSION['nam_leng'];
?>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Pa-Tukang | Tukang</title>
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
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="row justify-content-center">
        <img src="patukang.png" width="150" style="padding-top: 50px">      
      </div>
    </div>
   <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">             
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Pemesan</th>
                                            <th class="product-subtotal">Detail</th>
                                            <th class="product-subtotal">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $id_tukang = $_GET['id_tukang'];

                    $sqlCount1 = mysqli_query($link,"select * from tb_sewa,tb_customer WHERE id_tukang ='$id_tukang' AND tb_sewa.id_customer=tb_customer.id_customer");
                            while($data = mysqli_fetch_array($sqlCount1)){
                            $status = $data['status_sewa'];
                            if($status=="0"){
                              ?>
                                        <tr>
                                            <td class="product-thumbnail"><?php echo $data['nam_leng'];?></td>
                                            <td class="product-subtotal">
                                            <?php echo "<a href='detailsewa.php?id_sewa=$data[id_sewa]'>"?>
                                            <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Detail">
                                            <?php echo "</a>";?>
                                            </td>
                                            <td class="product-subtotal">
                                              <table>
                                            <tr>
                                            <td>
                                            <?php echo "<a href='statussewa.php?id_tukang=$data[id_tukang]'>";?>
                                            <input class="btn btn-primary btn-user btn-block" type="submit" value="Terima">
                                            <?php echo "</a>";?>
                                            </td>
                                            <td>  
                                            <?php echo "<a href='statustolak.php?id_tukang=$data[id_tukang]'>";?>
                                            <input class="btn btn-primary btn-user btn-block" type="submit" value="Tolak">
                                            <?php echo "</a>";?>
                                            </td>
                                          </tr>
                                        </table>
                                            </td>
                                        </tr>
                            <?php 
                            }
                            elseif($status=="1"){
                              ?>
                                        <tr>
                                            <td class="product-thumbnail"><?php echo $data['nam_leng'];?></td>
                                            <td class="product-subtotal"><?php echo "<a href='detailsewa.php?id_sewa=$data[id_sewa]'>"?>
                                              <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Detail">
                                              <?php echo "</a>";?>
                                            </td>
                                            <td class="product-subtotal">
                                            <input class="btn btn-primary btn-user btn-block" type="submit" value="Belum Terbayar" disabled="1">
                                    </td>
                                    </tr>
                                        <?php
                              }
                             elseif($status=="2"){
                              ?>
                                         <tr>
                                            <td class="product-thumbnail"><?php echo $data['nam_leng'];?></td>
                                            <td class="product-subtotal"><?php echo "<a href='detailsewa.php?id_sewa=$data[id_sewa]'>"?>
                                              <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Detail">
                                            <?php echo "</a>";?>
                                            </td>
                                            <td class="product-subtotal">
                                            <?php echo "<a href='statushapus.php?id_tukang=$data[id_tukang]'>";?>
                                            <input class="btn btn-primary btn-user btn-block" type="submit" value="Hapus">
                                            <?php echo "</a>";?>
                                            </td>
                                        </tr>
                                         <?php
                              }
                             elseif($status=="3"){
                              ?>
                                         <tr>
                                            <td class="product-thumbnail"><?php echo $data['nam_leng'];?></td>
                                            <td class="product-subtotal"><?php echo "<a href='detailsewa.php?id_sewa=$data[id_sewa]'>"?>
                                              <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Detail">
                                            <?php echo "</a>";?>
                                            </td>
                                            <td class="product-subtotal">
                                            <table>
                                            <tr>
                                            <td>
                                              <input class="btn btn-primary btn-user btn-block" type="button" value="Terbayar" disabled="1">
                                             </td>
                                            <td> 
                                            <?php echo "<a class='product-remove' href='statushapus.php?id_tukang=$data[id_tukang]'>";?>
                                            X
                                            <?php echo "</a>";?>
                                          </td>
                                          </tr>
                                        </table>
                                            </td>
                                        </tr>
                                        <?php
                              }
                          }  
                                        ?>
                                    </tbody>
                                </table>
                            </div>
    </div>
    </div>
    </div>
    </div>
    </div>                  
    <footer>
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