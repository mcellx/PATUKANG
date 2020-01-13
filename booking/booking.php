<!doctype html>
<?php
session_start();
include 'konek.php';
$id_customer = $_SESSION['id_customer'];
$id_tukang = $_GET['id_tukang'];
$sqlCount = mysqli_query($link,"select * from tb_customer,tb_tukang WHERE tb_customer.id_customer=tb_tukang.id_customer AND tb_tukang.id_tukang ='$id_tukang'");
$edit        = mysqli_fetch_array($sqlCount);
$cekfoto_diri = $edit['foto_diri']; 
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
	$cekstatus = mysqli_query($link,"select * from tb_customer,tb_tukang WHERE tb_customer.id_customer=tb_tukang.id_customer AND tb_customer.id_customer = '$id_customer'");
	if ($cekstatus) {
	$cekdata = mysqli_fetch_array($cekstatus);
	if ($cekdata) 
		{
			?>
		<header id="wn_header" class="header__area header__absolute sticky menu" style="margin-left:50px;margin-right:50px;">
			<div class="container-fixed">
				<ul class="topnav">	
        
        <lia style="padding-left: 30px">
        <?php
        echo "<a href='beranda.php?id_customer=$id_customer'>"
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
									  </li>
									 
									  <li style="padding-top: 20px">
									  <?php
										echo "<a class='nav-link' href='contact.php?id_customer=$cekdata[id_customer]'>"
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
        <?php
        echo "<a href='beranda.php?id_customer=$id_customer'>"
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
										echo "<a class='nav-link' href='daftartukang.php?id_customer=$id_customer'>"
										?>
											Daftar Tukang
										<?php
										echo"</a>";
										?>
									  </li>
									 
										
									  <li style="padding-top: 20px">
									  	<?php
										echo "<a class='nav-link' href='contact.php?id_customer=$id_customer'>"
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

        		<div class="row" style="padding-top: 50px;padding-left:30px;padding-right:30px">  
                    <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-12" style="padding-top:10px">
                    <h6 style="color: orange">DETAIL TUKANG :</h6> <br>
                    <div class="product__thumb">
                    <?php
                    if ($cekfoto_diri!="") {?>
                    <a class="first__img" style="align-items: center;"><img src="file/<?php echo $edit['foto_diri'] ?>" width="268" height="300" ></a>
                    <?php
                    }else{?>
                    <a class="first__img" style="align-items: center;"><img src=images/books/1.jpg width="268" height="300" ></a>
                    <?php
                    }
                    ?>
                    </div>
                    </div>
                    <div class="col-lg-6 col-sm-12" style="padding-top:50px;padding-left:20px">
                            <div class="wn__addres__wreapper">
                            <table>
                            				<tr>
        										<td>
        											<h5>Nama Tukang </h5>
        											<p><?php echo $edit['nam_leng']; ?></p>
        										</td>
        									</tr>
        									<tr>
        								 		<td>
        								 		<b>Rating </b>
                								<p><?php echo $edit['rating']; ?></p>
        										</td>
											</tr>
        									<tr>
        										<td >
        											<b>Keahlian </b>
        											<p><?php echo $edit['Keahlian']; ?></p>
        										</td>
        									</tr>
        									<tr>
        										<td>
        											<b>Harga Tukang</b>
        											<p>Rp.<?php echo $edit['harga_tukang']; ?> /m2</p>
        										</td>
        									</tr>
        									<tr>
        										<td>
        											<b>Alamat Tukang  </b>
        											<p><?php echo $edit['alamat']; ?></p>
        										</td>
        									</tr>
                    		</table>
                            </div>
                        </div>
                        </div>
                      </div>
                    
                            <div class="col-lg-6 col-md-12 col-sm-12" style="padding-top:5px;">
            <div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12">  	
                  <div class="text-center">
                    <h3 style="color: orange;padding-bottom:20px;padding-top:10px">Sewa Tukang Sekarang</h3>
                  </div>
                  <form class="user" method="post" action="checksewa.php">
                   	<input type="hidden" value="<?=$_SESSION['id_customer'];?>" name="id_customer">
   	                <input type="hidden" value="<?php echo $edit['id_tukang'];?>" name="id_tukang">
                    <div class="form-group">
                      &nbsp;Alamat Penyewa : <input type="text" class="form-control form-control-user" name="alamat_sewa">
                    </div>
                    <div class="form-group">
                       &nbsp;Luasan Pekerjaan : &nbsp;&nbsp;&nbsp;&nbsp;<b style="color: red;font-size:10px">*koma menggunakan titik (.) contoh : 12.5</b>
                     <input type="text" class="form-control form-control-user" name="luas_sewa" id="luas_sewa" placeholder="m2" onkeyup="sum()">
                    </div>
                    <div class="form-group">
                     <input hidden="true" type="text" class="form-control form-control-user" name="luas_sewa" id="harga_tukang" value="<?php echo $edit['harga_tukang']; ?>" onkeyup="sum()">
                    </div>
                    <div class="form-group">
                       &nbsp;Detail : <input type="" class="form-control form-control-user" name="detail_sewa" >
                    </div>
                    <div class="form-group">
                       &nbsp;Tanggal Penyewaan : <input type="date" class="form-control form-control-user" name="tgl_sewa"">
                    </div>
                     <div class="form-group">
                       &nbsp;Total Harga Sewa : <input type="text" class="form-control form-control-user" name="total_sewa" id="total_sewa" placeholder="0" readonly="true" ">
                    </div>
                    	<input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Sewa">
                    </form>
                
                    </div>
                </div>
            </div>	
                            </div>
            </div>
                    
<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('harga_tukang').value;
      var txtSecondNumberValue = document.getElementById('luas_sewa').value;
      var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total_sewa').value = result;
      }
      else
      {
      	 var result = 0;
      	 document.getElementById('total_sewa').value = result;
      }
}
</script>
	</body>
	</html>