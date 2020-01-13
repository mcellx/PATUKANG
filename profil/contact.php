<!doctype html>
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
	<title>Pa-Tukang | Profil</title>
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
    <link rel="stylesheet" href="css/rating.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fixed" style="margin-left:50px;margin-right:50px;">
<?php  
	$cekstatus = mysqli_query($link,"select * from tb_customer,tb_tukang WHERE tb_customer.id_customer=tb_tukang.id_customer AND tb_customer.id_customer = '$r'");
	if ($cekstatus) 
		{
            $cekdata = mysqli_fetch_array($cekstatus);
            $cekfoto_diri = $cekdata['foto_diri'];
			?>
		<header id="wn_header" class="header__area header__absolute sticky menu" style="margin-left:50px;margin-right:50px;">
      <div class="container-fixed">
        <ul class="topnav"> 

        <lia style="padding-left: 30px">
        <?php
        echo "<a href='beranda.php?user=$cekdata[nam_leng]'>"
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
                                        echo "<a class='nav-link' href='profiltukang.php?id_tukang=$cekdata[id_tukang]'>"
                                        ?>
                                         <?php echo $cekdata['Keahlian']; ?>
                                        <?php
                                        echo "</a>";
                     ?>
                    </a>
                    </li>
                <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                <li class="icon" style="padding-top:20px;padding-right:20px">
                  <a href="javascript:void(0);" onclick="myFunction()"><i class="fa fa-list"></i></a>
                  </li>
              
              </ul> 
        </div>
    </header>
			       <div class="row" style="padding-top: 50px">
                   <div class="col-lg-2"></div>  
                    <div class="col-lg-4 col-md-12 col-sm-12" style="padding-left:70px">
                    <table>
                    <tr>
                    <td>
                    <div class="product__thumb">
                    <?php
                    if ($cekfoto_diri!="") {?>
                    <i class="first__img" style="align-items: center;"><img src="file/<?php echo $cekdata['foto_diri'] ?>" width="270" height="300" ></i>
                    <form method="post" class="user" action="cekfoto_diri.php" enctype="multipart/form-data">
                    <input type="file" name="foto_diri" style="font-size: 10px">
                    <input type="submit" name="submit" value="Ganti Foto" style="font-size:10px;">
                    </form>
                    <?php
                    }else{?>
                    <a class="first__img" style="align-items: center;"><img src=images/books/1.jpg width="270" height="300" ></a>
                     <form method="post" class="user" action="cekfoto_diri.php" enctype="multipart/form-data">
                    <input type="file" name="foto_diri" style="font-size: 10px">
                    <input type="submit" name="submit" value="upload" style="font-size:10px;">
                    </form>
                    <?php
                    }
                    ?>
                    </div>
                    </td>
                </tr>
            </table>
        </div>
         <div class="col-lg-6 col-md-12 col-sm-12" style="padding-top: 20px;padding-left:30px">
                            <div class="wn__addres__wreapper">
                                <div class="single__address">
                                    <div class="content">
                                        <h2><?=$_SESSION['nam_leng'];?></h2> (customer/tukang)
                                    </div>
                                </div>
                            <table>
                            <tr>
                            <td>
                                <div class="single__address">
                                    <i class="icon-location-pin icons">
                                        Alamat:
                                    </i>
                                    <div class="content">
                                        <p><?=$_SESSION['alamat'];?></p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding-left: 50px">
                                <div class="single__address" style="padding-top:10px">
                                    <i class="icon-phone icons">
                                        Nomer Telfon:
                                    </i>
                                    <div class="content">
                                        <p><?=$_SESSION['no_telp'];?></p>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="single__address" style="padding-top:10px">
                                    <i class="icon-envelope icons">
                                        Email:
                                    </i>
                                    <div class="content">
                                        <p><?=$_SESSION['email'];?></p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding-left: 50px">
                                <div class="single__address" style="padding-top:10px">
                                    <img src="star.png" width="13px"> &nbsp;
                                        Rating:
                                    <div class="content">
                                        <p><?php echo $cekdata['rating']; ?></p>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                             <td>
                                <div class="single__address" style="padding-top:10px">
                                    <li>
                                        Keahlian/Tukang :
                                    </li>
                                    <div class="content">
                                        <p><?php echo $cekdata['Keahlian']; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding-left: 50px">
                                <div class="single__address" style="padding-top:10px">
                                    <li>
                                        Harga Jasa:
                                    </li>
                                    <div class="content">
                                        <p><?php echo $cekdata['harga_tukang']; ?></p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                            </div>
                            </div>
                   
                    </div>
	<?php
	}
	else {
		?>
		<header id="wn_header" class="header__area header__absolute sticky menu" style="margin-left:50px;margin-right:50px;">
      <div class="container-fixed">
        <ul class="topnav"> 

         <lia style="padding-left: 30px">
        <?php
        echo "<a href='beranda.php?user=$cekdata[nam_leng]'>"
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
                    echo "<a class='nav-link' href='daftartukang.php?id_customer=$r'>"
                    ?>
                     Daftar Tukang
                    </a>
                    </li>
                <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                <li class="icon" style="padding-top:20px;padding-right:20px">
                  <a href="javascript:void(0);" onclick="myFunction()"><i class="fa fa-list"></i></a>
                  </li>
              
              </ul> 
        </div>
    </header>
                    <div class="row" style="padding-top: 50px">
                   <div class="col-lg-2"></div>  
                    <div class="col-lg-4 col-md-12 col-sm-12" style="padding-left:70px">
                    <table>
                    <tr>
                    <td>
                    <div class="product__thumb">
                     <?php
                    if ($cekfoto_diri!="") {?>
                    <i class="first__img" style="align-items: center;"><img src="file/<?php echo $cekdata['foto_diri'] ?>" width="270" height="300" ></i>
                    <form method="post" class="user" action="cekfoto_diri.php" enctype="multipart/form-data">
                    <input type="file" name="foto_diri" style="font-size: 10px">
                    <input type="submit" name="submit" value="Ganti Foto" style="font-size:10px;">
                    </form>
                    <?php
                    }else{?>
                    <a class="first__img" style="align-items: center;"><img src=images/books/1.jpg width="270" height="300" ></a>
                     <form method="post" class="user" action="cekfoto_diri.php" enctype="multipart/form-data">
                    <input type="file" name="foto_diri" style="font-size: 10px">
                    <input type="submit" name="submit" value="upload" style="font-size:10px;">
                    </form>
                    <?php
                    }
                    ?>
                    </div>
                    </td>
                </tr>
            </table>
        </div>
         <div class="col-lg-6 col-md-12 col-sm-12" style="padding-top: 20px;padding-left:30px">
                            <div class="wn__addres__wreapper">
                                <div class="single__address">
                                    <div class="content">
                                        <h2><?=$_SESSION['nam_leng'];?></h2> (customer)
                                    </div>
                                </div>
                            <table>
                            <tr>
                            <td>
                                <div class="single__address">
                                    <i class="icon-location-pin icons">
                                        Alamat:
                                    </i>
                                    <div class="content">
                                        <p><?=$_SESSION['alamat'];?></p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding-left: 50px">
                                <div class="single__address" style="padding-top:10px">
                                    <i class="icon-phone icons">
                                        Nomer Telfon:
                                    </i>
                                    <div class="content">
                                        <p><?=$_SESSION['no_telp'];?></p>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="single__address" style="padding-top:10px">
                                    <i class="icon-envelope icons">
                                        Email:
                                    </i>
                                    <div class="content">
                                        <p><?=$_SESSION['email'];?></p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding-left: 50px">
                                <div class="single__address" style="padding-top:10px">
                                    <i class="icon-stars icons">
                                        Rating:
                                    </i>
                                    <div class="content">
                                        <p><?php echo $cekdata['rating']; ?></p>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                             <td>
                                <div class="single__address" style="padding-top:10px">
                                    <li>
                                        Keahlian/Tukang :
                                    </li>
                                    <div class="content">
                                        <p> - </p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding-left: 50px">
                                <div class="single__address" style="padding-top:10px">
                                    <li>
                                        Harga Jasa:
                                    </li>
                                    <div class="content">
                                        <p> - </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                            </div>
                            </div>
                   
                    </div>
            
		<?php
		}
		?>
		    <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">             
                            <div class="table-content wnro__table table-responsive">
                                <table style="border-width:2px;border-color:black">
                                    <thead>
                                    	<h3 style="text-align:center;padding-bottom: 5px">PEMESANAN</h3>
                                        <tr class="title-top" >
                                            <th class="product-thumbnail" style="background-color: orange;border-width:2px;border-color:black">Memesan</th>
                                            <th class="product-add-to-cart" style="background-color: orange;border-width:2px;border-color:black">Status</th>
                                            <th class="product-subtotal" style="background-color: orange;border-width:2px;border-color:black">Info</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sqlCount1 = mysqli_query($link,"select * from tb_sewa,tb_tukang WHERE tb_sewa.id_customer ='$r' AND tb_sewa.id_tukang=tb_tukang.id_tukang ");
                            if ($sqlCount1) {
                            while($data = mysqli_fetch_array($sqlCount1)){
                            $id_tukang = $data['id_tukang'];
                            $status = $data['status_sewa'];
                            if($status=="0"){
                              ?>
                                        <tr>
                                             <td class="product-thumbnail" style="border-width:2px;border-color:black"><?php echo $data['Keahlian'];?></td>
                                             <td class="product-add-to-cart" style="border-width:2px;border-color:black"><a style="color:yellow">PENDING</a></td>
                                            <td class="product-subtotal" style="border-width:2px;border-color:black">
                                            <div class="row">
                                            <div class="col-lg-12" style="padding-top:8px">
                                           <input class="btn btn-primary btn-block" type="button"  data-toggle="modal" data-target="#myModal2" value="Detail">

                                             <div class="modal fade" id="myModal2" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              <!-- konten dari Modal-->
                                              <div class="modal-content">
                                                <div class="modal-header" style="margin-left:90px;margin-right:90px">
                                                  <h6 >&nbsp;&nbsp;Beri Rating Tukang mu Sekarang</h6>
                                                </div>
                                                <div class="modal-body">
                                                    <?php
                                $uhuy = mysqli_query($link,"select * from tb_customer,tb_tukang WHERE tb_tukang.id_tukang ='$id_tukang' AND tb_customer.id_customer=tb_tukang.id_customer");
                                $ahay = mysqli_fetch_array($uhuy);
                                $cekfoto_diri = $ahay['foto_diri'];
                                    ?>
                                                    <div class="row">  
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                <table>
                                                <tr>
                                                <td>
                                                <div class="product__thumb">
                                                <?php
                                                if ($cekfoto_diri!="") {?>
                                                <i class="first__img" style="align-items: center;"><img src="file/<?php echo $ahay['foto_diri'] ?>" width="100" height="140" ></i>
                                                <?php
                                                }else{?>
                                                <a class="first__img" style="align-items: center;"><img src=images/books/1.jpg width="100" height="140" ></a>
                                                <?php
                                                }
                                                ?>
                                                </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                     <div class="col-lg-8 col-md-12 col-sm-12">
                                                        <div class="wn__addres__wreapper">
                                                        <table>
                                                        <tr>
                                                        <td>
                                                         <div class="single__address">
                                                                    <li>
                                                                        Nama Tukang :
                                                                    </li>
                                                                <div class="content">
                                                                    <p><?php echo $ahay['nam_leng']; ?></p>
                                                                </div>
                                                        </div>
                                                        </td>
                                                        <td>
                                                            <div class="single__address">
                                                                <li>
                                                                    Keahlian/Tukang :
                                                                </li>
                                                                <div class="content">
                                                                    <p><?php echo $ahay['Keahlian']; ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr> 
                                                        <td>
                                                            <div class="single__address">
                                                                <li>
                                                                    Harga Jasa:
                                                                </li>
                                                                <div class="content">
                                                                    <p><?php echo $data['harga_tukang']; ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="single__address">
                                                                <li>
                                                                    Rating:
                                                                </li>
                                                                <div class="content">
                                                                    <p><?php echo $data['rating']; ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    
                                                </table>
                                                        </div>
                                                        </div>
                                               
                                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                            </div>
                                            </div>
                                            </td>
                                        </tr>
                            <?php 
                            }if($status=="4"){
                              ?>
                                         <tr>
                                             <td class="product-thumbnail" style="border-width:2px;border-color:black"><?php echo $data['Keahlian'];?></td>
                                            <td class="product-add-to-cart" style="border-width:2px;border-color:black"><a style="color:orange">SELESAI</a></td>
                                            <td class="product-subtotal" style="border-width:2px;border-color:black">
                                            <div class="row">
                                            <div class="col-lg-6" style="padding-top:8px"> <?php echo "<a href='#'>";?>
                                            <input class="btn btn-primary btn-block" type="button" name="hapus" value="Hapus" ><?php echo "</a>";?>
                                            </div>
                                            <div class="col-lg-6" style="padding-top:8px">
                                              <input class="btn btn-primary btn-block" type="button" value="Detail">

                                            </div>
                                            </div>
                                            </td>
                                        </tr>
                                         <?php 
                            }if($status=="5"){
                              ?>
                                         <tr>
                                             <td class="product-thumbnail" style="border-width:2px;border-color:black"><?php echo $data['Keahlian'];?></td>
                                             <td class="product-add-to-cart" style="border-width:2px;border-color:black"><a style="font-size:10px;color:crimson">PEMBAYARAN DALAM PROSES</a></td>
                                            <td class="product-subtotal" style="border-width:2px;border-color:black">
                                            <?php echo "<a href='detailsewa.php?id_sewa=$data[id_sewa]'>";?>
                                            <input class="btn btn-primary btn-block" type="button" name="hapus" value="Detail"><?php echo "</a>";?>
                                            </td>
                                        </tr>
                            <?php 
                            }
                            elseif($status=="1"){
                              ?>
                                         <tr>
                                             <td class="product-thumbnail" style="border-width:2px;border-color:black"><?php echo $data['Keahlian'];?></td>
                                            <td class="product-add-to-cart" style="border-width:2px;border-color:black"><a style="color:blue">DITERIMA</a></td>
                                            <td class="product-subtotal" style="border-width:2px;border-color:black">
                                            <div class="row">
                                            <div class="col-lg-6" style="padding-top:8px">
                                            <input class="btn btn-primary btn-block" type="button"  data-toggle="modal" data-target="#myModal1" value="Bayar" >
                    
                                             <div class="modal fade" id="myModal1" role="dialog">
                                                <div class="modal-dialog">
                                                
                                                  <!-- konten dari Modal-->
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h4 >Pembayaran Customer</h4>
                                                    </div>
                                                   
                                 <?php
                                   $id_sewa = $data['id_sewa'];
                                   $alay= mysqli_query($link,"select * from tb_sewa,tb_customer where id_sewa='$id_sewa' AND tb_sewa.id_customer=tb_customer.id_customer");
                                   if ($alay) {
                                   $ambil = mysqli_fetch_array($alay);?>                       
                                             <div class="wn__addres__wreapper" style="margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:20px">
                                                        <table style="border-width:3px; border-color: orange">
                                                        <tr>
                                                        <td>
                                                         <b>Customer:</b> <?php echo $ambil['nam_leng']; ?>, <b>Alamat: </b><?php echo $ambil['alamat_sewa']; ?>
                                                         <p><b>Tanggal Pekerjaan:</b> <?php echo $ambil['tgl_sewa']; ?>, <b>Total Harga:</b> <?php echo $ambil['total_sewa']; ?></p>
                                                        </td>
                                                        </tr>
                                                        </table>
                                                        </div>
                                                         <div class="dropdown">
                                                        <button type="button" class="btn" style="background-color:orange;color:white">Rekening Pembayaran</button>
                                                        <select class="btn" id="barang" onclick="price()"  style="background-color:orange;color:white">
                                                            <option value="" hidden="true">Pilih</option>
                                                            <option class="dropdown-item" value="9845-3356-2564-9632">BCA</option> 
                                                            <option class="dropdown-item" value="9846-3356-2564-9631">BRI</option>
                                                            <option class="dropdown-item" value="9847-3356-2564-9635">Mandiri</option>
                                                        </select>
                                                    </div>
                                                            <div class="col-lg-12" style="padding-top:10px;margin-bottom:20px">
                                                                <input id="harga" class="btn btn-block" type="submit" value="Rekening Bank" readonly="1">
                                                            </div>
                                                        <form  method="post" action="tess.php" enctype="multipart/form-data"> 
                                                                <input hidden="true" name="id_sewa" value="<?php echo $data['id_sewa'];?>">
                                                                <label style="font-size:15px">No.Rekening Customer :</label>
                                                                <input name="no_rek_cus" type="text" style="width:200px; border-color: orange">
                                                                <label style="margin-top: 20px;font-size:15px">Upload Bukti Transaksi :</label>
                                                                <input type="file" name="foto_transaksi" style="width:200px">
                                                              <div class="col-lg-12" style="padding-top:20px">
                                                            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Kirim" style="background-color:orange;color:white">
                                                              </div>
                                                              </form>
                                                                <?php
                                                    }
                                                    ?>
                                                    <div class="modal-footer" style="margin-top:10px">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>

                                            </div>
                                            <div class="col-lg-6" style="padding-top:8px"> <?php echo "<a href='detailsewa.php?id_sewa=$data[id_sewa]'>";?>
                                            <input class="btn btn-primary btn-block" type="button" value="Detail"><?php echo "</a>";?>
                                            </div>
                                            </div>
                                            </td>
                                        </tr>
                                        <?php
                              }
                             elseif($status=="2"){
                              ?>
                                         <tr>
                                             <td class="product-thumbnail" style="border-width:2px;border-color:black"><?php echo $data['Keahlian'];?></td>
                                            <td class="product-add-to-cart" style="border-width:2px;border-color:black"><a style="color:red">DITOLAK</a></td>
                                            <td class="product-subtotal" style="border-width:2px;border-color:black">
                                            <div class="row">
                                            <div class="col-lg-6" style="padding-top:8px"> <?php echo "<a href='#'>";?>
                                            <input class="btn btn-primary btn-block" type="button" name="hapus" value="Hapus" ><?php echo "</a>";?>
                                            </div>
                                            <div class="col-lg-6" style="padding-top:8px"> <?php echo "<a href='detailsewa.php?id_sewa=$data[id_sewa]'>";?>
                                            <input class="btn btn-primary btn-block" type="button" name="hapus" value="Detail"><?php echo "</a>";?>
                                            </div>
                                            </div>
                                            </td>
                                        </tr>
                                         <?php
                              }
                             elseif($status=="3"){
                              ?>
                                         <tr>
                                            <td class="product-thumbnail" style="border-width:2px;border-color:black"><?php echo $data['Keahlian'];?></td>
                                            <td class="product-add-to-cart" style="border-width:2px;border-color:black"><a style="color:green">TERBAYAR</a></td>
                                            <td class="product-subtotal" style="border-width:2px;border-color:black">
                                            <div class="row">
                                            <div class="col-lg-6" style="padding-top:8px"> 
                                            <input class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#myModal" value="Beri Rating">

                                            <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              <!-- konten dari Modal-->
                                              <div class="modal-content">
                                                <div class="modal-header" style="margin-left:90px;margin-right:90px">
                                                  <h6 >&nbsp;&nbsp;Beri Rating Tukang mu Sekarang</h6>
                                                </div>
                                                <div class="modal-body">
                                                    <?php
                                $uhuy = mysqli_query($link,"select * from tb_customer,tb_tukang WHERE tb_tukang.id_tukang ='$id_tukang' AND tb_customer.id_customer=tb_tukang.id_customer");
                                $ahay = mysqli_fetch_array($uhuy);
                                $cekfoto_diri = $ahay['foto_diri'];
                                    ?>
                                                    <div class="row">  
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                <table>
                                                <tr>
                                                <td>
                                                <div class="product__thumb">
                                                <?php
                                                if ($cekfoto_diri!="") {?>
                                                <i class="first__img" style="align-items: center;"><img src="file/<?php echo $ahay['foto_diri'] ?>" width="100" height="140" ></i>
                                                <?php
                                                }else{?>
                                                <a class="first__img" style="align-items: center;"><img src=images/books/1.jpg width="100" height="140" ></a>
                                                <?php
                                                }
                                                ?>
                                                </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                     <div class="col-lg-8 col-md-12 col-sm-12">
                                                        <div class="wn__addres__wreapper">
                                                        <table>
                                                        <tr>
                                                        <td>
                                                         <div class="single__address">
                                                                    <li>
                                                                        Nama Tukang :
                                                                    </li>
                                                                <div class="content">
                                                                    <p><?php echo $ahay['nam_leng']; ?></p>
                                                                </div>
                                                        </div>
                                                        </td>
                                                        <td>
                                                            <div class="single__address">
                                                                <li>
                                                                    Keahlian/Tukang :
                                                                </li>
                                                                <div class="content">
                                                                    <p><?php echo $ahay['Keahlian']; ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr> 
                                                        <td>
                                                            <div class="single__address">
                                                                <li>
                                                                    Harga Jasa:
                                                                </li>
                                                                <div class="content">
                                                                    <p><?php echo $data['harga_tukang']; ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="single__address">
                                                                <li>
                                                                    Rating:
                                                                </li>
                                                                <div class="content">
                                                                    <p><?php echo $data['rating']; ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    
                                                </table>
                                                        </div>
                                                        </div>
                                               
                                                </div>
                                                    <form method="post" action="rating.php" style="padding-top:10px"> 
                                                            <input hidden="true" name="id_tukang" value="<?php echo $data['id_tukang'];?>">
                                                              <div class="rating" style="padding-left:100px;padding-top:10px;padding-bottom:30px">
                                                                <i>Rating :</i> &nbsp;&nbsp;
                                                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="SEMPURNA"></label>
                                                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="SANGAT BAIK"></label>
                                                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="BAIK"></label>
                                                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="BURUK"></label>
                                                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="SANGAT BURUK"></label>
                                                            </div>                     
                                                            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Kirim" style="background-color:orange">
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                            </div>
                                            <div class="col-lg-6" style="padding-top:8px"> <?php echo "<a href='detailsewa.php?id_sewa=$data[id_sewa]'>";?>
                                            <input class="btn btn-primary btn-block" type="button" name="hapus" value="Detail"><?php echo "</a>";?>
                                            </div>
                                            </div>
                                            </td>
                                        </tr>
                                        <?php
                              }
                          }
                          }  
                                        ?>
                                    </tbody>
                                </table>
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
	<!-- JS Files -->
    <script type="text/javascript">
    function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
    }
    </script>
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
	
</body>
</html>