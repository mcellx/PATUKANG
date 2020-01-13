<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="patukang.png">

  <title> Daftar | Pa - Tukang</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
<style type="text/css">
  hr{
  border: solid;
  color: grey;
  border-width: 0.3px;
}
  .bg2{
  border-image-repeat: none;
  background-image: url('index.jpg');
  background-position: center; 
  background-size: 750px 510px;
}
</style>

</head>

<body>
  <div class="container-fixed bg2" style="margin-left:50px;margin-right:50px;margin-bottom:0px;margin-top:20px; padding-right:30px;padding-left:30px">
    <div class="row justify-content-center" style="padding-top:100px">  
      <div class="col-lg-6 col-md-8 col-sm-10">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Buat Akun </h1>
                  </div>
                   <form class="user" method="post" action="checkdaftar.php">
                    <div class="row"> 
                     <div class="col-lg-6">
                     <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="nam_leng"  id="nam_leng" placeholder="Nama Lengkap">
                     </div>
                   </div>
                   <div class="col-lg-6" >
                      <div class="form-group">
                      <input type="varchar" class="form-control form-control-user" name="no_telp"  id="no_telp" placeholder="No.Telp">
                    </div>
                  </div>
                  <div class="col-lg-6" >
                    <div class="form-group">
                      <select class="form-control form-control-user" name="id_kec" id="id_kec" >
                        <option value="" hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pilih Kelurahan</option>

                                <?php
                                    include "konek.php";
                                      $query = "select * from tb_kec";
                                      $hasil = mysqli_query($link,$query);
                                      while ($qtabel = mysqli_fetch_assoc($hasil))
                                        {
                                          echo '<option value="'.$qtabel['id_kec'].'">'.$qtabel['kecamatan'].'-'.$qtabel['kelurahan'].'</option>';        
                                        }
                                        ?>
                      </select>
                    </div>
                    </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                   
                      <input type="varchar" class="form-control form-control-user" name="alamat"  id="alamat" placeholder="Detail Alamat ">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                      <input type="varchar" class="form-control form-control-user" name="email"  id="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password"  id="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Daftar">
                  </div>
                </div>
                  
                  </form>
                  <div class="text-center">
                  <hr style="padding-top: 1px">
                    <label> Sudah punya akun ?</label>
                    <a class="small" href="masuk.php">Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

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
