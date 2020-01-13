<!DOCTYPE html>
<?php
session_start();
include'konek.php';
$r=$_SESSION['id_customer'];
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="patukang.png">

  <title>Pa - Tukang | Detail Sewa</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

   <link rel="shortcut icon" href="patukang.png">
	
   <link rel="stylesheet" href="css/bootstrap.min.css"> 
   <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/plugins.css">
   <link rel="stylesheet" href="css/uhuy.css">
	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
  <div class="container-fixed" style="margin-left:50px;margin-right:50px;">
		<header id="wn_header" class="header__area header__absolute sticky menu" style="margin-left:50px;margin-right:50px;">
			<div class="container-fixed">
				<h3 style="text-align: center;padding-top: 30px">DETAIL PENYEWAAN</h3>
      </div>
		</header>	
	<div class="container">
         <div class="card o-hidden border-0 shadow-lg my-2">
          <div class="card-body">
            <div class="row">
                   <?php
                   $id_sewa = $_GET['id_sewa'];
                   $data= mysqli_query($link,"select * from tb_sewa,tb_customer where id_sewa='$id_sewa' AND tb_sewa.id_customer=tb_customer.id_customer");
                   if ($data) {
                   $ambil = mysqli_fetch_array($data);
                   $cekfoto_diri = $ambil ['foto_diri'];
                   ?>
                   <div class="container" style=" padding-bottom: 20px">
                   <div class="row justify-content-center">
                   <table>
                   	 <tr>
                   		<td>
                   	<div class="product__thumb">
						        <?php
                    if ($cekfoto_diri!="") {?>
                    <a class="first__img" style="align-items: center;"><img src="file/<?php echo $ambil['foto_diri'] ?>" width="270" height="340" ></a>
                    <?php
                    }else{?>
                    <a class="first__img" style="align-items: center;"><img src=images/books/1.jpg width="270" height="340" ></a>
                    <?php
                    }
                    ?>
					</div>
        				</td>
        				<td style="padding-left:30px">
        					<div class="wn__addres__wreapper">
        					
        						<div class="single__address">
        							<div class="content">	
        					 			<b>Nama Penyewa:</b>
        					 			<p><?php echo $ambil['nam_leng']; ?></p>
        					 		</div>
        					 	</div>
        						<div class="single__address">
        							<div class="content">
        								<b>Alamat Penyewa:</b>
        								<p><?php echo $ambil['alamat_sewa']; ?></p>
        							</div>
        						</div>
        						<div class="single__address">
        							<div class="content">
        								<b>Luas Pekerjaan:</b>
        								<p><?php echo $ambil['luas_sewa']; ?>m2</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<div class="content">
        								<b>Detail Pekerjaan:</b>
        								<p><?php echo $ambil['detail_sewa']; ?></p>
        							</div>
        						</div>

        						<div class="single__address">
        							<div class="content">
        								<b>Tanggal Pengerjaan:</b>
        								<p><?php echo $ambil['tgl_sewa']; ?></p>
        							</div>
        						</div>

        							<div class="single__address">
        							<div class="content">
        								<b>Total Harga Penyewaan:</b>
        								<p>Rp <?php echo $ambil['total_sewa']; ?></p>
        							</div>
        						</div>
        					</div>
							</td>
						</tr>
					
					</table>        				
        			</div>
        			</div>
                   <?php
               				}
                   ?>
                </div>
              </div>
            </div>
          </div>
        

        <footer >
				 <div class="row">		
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">	
									<div style="text-align: center; font-style: italic; padding-top: 10px"><h style="color: orange">Patukang.com</h> adalah wesite penyewaan jasa tukang yang tepat untuk menyelesaikan masalah Anda. Dengan menyediakan banyak jasa tukang sesuai dengan yang Anda butuhkan.</div>
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

  <script src="bootstrap-select.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
