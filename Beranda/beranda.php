<!doctype html>
<?php
session_start();
include 'konek.php';
?>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Patukang</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
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
		<?php  
	$id_customer = $_SESSION['id_customer'];
	$nam_leng = $_SESSION['nam_leng'];
	$cekstatus = mysqli_query($link,"select * from tb_customer,tb_tukang WHERE tb_customer.id_customer=tb_tukang.id_customer AND tb_customer.id_customer = '$id_customer'");
	if ($cekstatus) {
	$cekdata = mysqli_fetch_array($cekstatus);
	if ($cekdata) 
		{
			?>
		<header id="wn_header" class="header__area header__absolute sticky menu" style="margin-left:50px;margin-right:50px;">
			<div class="container-fixed" >
				<ul class="topnav">	

				<lia style="padding-left: 30px">
					<img src="patukang.png" width="70">
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
									  </li>
									 
									  <li style="padding-top: 20px">
									  <?php
										echo "<a class='nav-link' href='contact.php?user=$cekdata[nam_leng]'>"
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
	<?php
	}
	else {
		?>
		<header id="wn_header" class="header__area header__absolute sticky menu" style="margin-left:50px;margin-right:50px;">
			<div class="container-fixed">
				<ul class="topnav">	

				<lia style="padding-left: 30px">
					<img src="patukang.png" width="70">
				</lia>
				
									 
									  <li style="padding-top: 20px">
										<a class="nav-link" href="keluar.php">			
											<i class="fa fa-power-off"></i> | Keluar
										</a>
									  </li> 
									
									   <li style="padding-top: 20px">
									  <?php
										echo "<a class='nav-link' href='daftartukang.php?user=$nam_leng'>"
										?>
											Daftar Tukang
										<?php
										echo"</a>";
										?>
									  </li>
									 
										
									  <li style="padding-top: 20px">
									  	<?php
										echo "<a class='nav-link' href='contact.php?user=$cekdata[nam_leng]'>"
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
		<?php
		}}
		?>
		<div class="row justify-content-center" style="padding-top:50px;">	
			<div class="col-lg-8 col-md-12 col-sm-12" style="">
					<img class="slideshow" style="border-radius: 20px 20px 20px 20px; width:100%" src="iklan.jpg">
	  				<img class="slideshow" style="border-radius: 20px 20px 20px 20px; width:100%" src="images.jpg">
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12" style="text-align: center;padding-left:20px">
				<h5 align="center" style="font-family:arial black ;color: orange;padding-top:20px;">Urutkan Berdasar</h5>
				<table class="table" style="font-family:Arial;">
					<tr>
						<td style="padding-left:80px;padding-top:16px">
						<img src="rp.png" width="90" style="padding-left:50px">
						<?php echo "<a href='beranda-harga-tertinggi.php?'>";?>
						<p style="font-size:11px;text-align: center;">Tertinggi <?php echo "</a>"; ?> | <?php echo "<a href='beranda-harga-terendah.php?'>";?>
						Terendah</p> <?php echo "</a>"; ?>
						</td>
						<td style="padding-right:80px;padding-top:20px">
						<img src="star.png" width="35">
						<?php echo "<a href='beranda-rating.php?'>";?>
						<p style="font-size:11px">Rating</p>
						<?php echo "</a>"; ?>
						</td>
					</tr>
				</table>
		<h6 align="center" style="font-family:arial black ;color: orange;">Kategori Jasa Tukang</h6>		
				<table class="table" style="font-family:Arial;">
					<div class="row justify-content-center">
					<tr>
						<td>
						<img src="alumunium.png" width="48" style="padding-left:10px;padding-top:5px">
						<?php echo "<a href='beranda-tukang-alumunium.php?user=$cekdata[nam_leng]'>";?>
						<p style="text-align: center;font-size:11px">Alumunium</p>
						<?php
						echo "</a>";
						?>
						</td>
						<td>
						<img src="atap.png" width="40">
						<?php echo "<a href='beranda-tukang-atap.php?user=$cekdata[nam_leng]'>";?> 
						 <p style="text-align: center;font-size:11px">Atap</p>
						 <?php
						echo "</a>";
						?>
						</td>
						<td>
						<img src="keramik.png" width="40" style="padding-left:5px;padding-top:5px">
						<?php echo "<a href='beranda-tukang-keramik.php?user=$cekdata[nam_leng]'>";?>
						<p style="text-align: center;font-size:11px">Keramik</p>
						<?php
						echo "</a>";
						?>
						</td>
						<td>
						<img src="cat.png" width="40">
						<?php echo "<a href='beranda-tukang-cat.php?user=$cekdata[nam_leng]'>";?>
						<p style="text-align: center;font-size:11px">Cat</p>
						<?php
						echo "</a>";
						?>
						</td>
						<td>
						<img src="plafon.png" width="60" style="padding-top:4px">
						<?php echo "<a href='beranda-tukang-plafon.php?user=$cekdata[nam_leng]'>";?>
						<p style="text-align: center;font-size:11px">Plafon</p>
						<?php
						echo "</a>";
						?>
						</td>
					</tr>
				</div>
				</table>
		</div>
	</div>


		<div class="container-fixed" style="margin-top:30px">
			<h5 style="text-align: center;">Selamat Datang di Pa - Tukang.com</h5>
			<h6 style="text-align: center;color: orange;padding-bottom:10px">SEMUA KATEGORI</h6><hr style="border-width:2px"><br>  
			<div class="row">
		<?php  
	$sqlCount = mysqli_query($link,"select * from tb_customer,tb_tukang WHERE tb_customer.id_customer=tb_tukang.id_customer AND tb_customer.id_customer != '$id_customer'");
				while ($data = mysqli_fetch_array($sqlCount)){
				$cekfoto= $data['foto_diri'];
				if ($cekfoto!="") 
				{
					?>
					<div class="col-lg-2 col-md-3">
							<div class="product product__style--3" >
								<img src="file/<?php echo $data['foto_diri'] ?>" width="160" height="180" style="padding-left: 5px">
										<div class="product__content">
											<h4><?php echo $data['Keahlian']; ?></h4>
											<li> Rating : <?php echo $data['rating']; ?></li>
											<ul class="prize d-flex">
												<li >Rp.<?php echo $data['harga_tukang']; ?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links" style="padding-left:35px">
														<?php
														 echo "<a href='booking.php?id_tukang=$data[id_tukang]'><input type='submit' name='kirim' value='BOOKING'></a>"
														 ?>
													</ul>
												</div>
											</div>
										</div>
							</div>
						</div>
						    <?php 
						}else{
							?>
							<div class="col-lg-2 col-md-3 ">
							<div class="product product__style--3">
								<img src="images/books/1.jpg" width="160" height="180" style="padding-left: 5px">
										<div class="product__content">
											<h4><?php echo $data['Keahlian']; ?></h4>
											<li> Rating : <?php echo $data['rating']; ?></li>
											<ul class="prize d-flex">
												<li >Rp.<?php echo $data['harga_tukang']; ?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links" style="padding-left:35px">
														<?php
														 echo "<a href='booking.php?id_tukang=$data[id_tukang]'><input type='submit' name='kirim' value='BOOKING'></a>"
														 ?>
													</ul>
												</div>
											</div>
										</div>
							</div>
						</div>
						<?php 
						} } ?>
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
	

	<script>
	var myIndex = 0;
	carousel();
	 
	function carousel() {
		var i;
		var x = document.getElementsByClassName("slideshow");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
	 
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
		x[myIndex-1].style.display = "block";  
		setTimeout(carousel, 3000); //Ubah gambar setiap 3 detik
		}
	</script>

	<script src="js/uhuy.js"></script>
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
	
</body>
</html>