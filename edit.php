<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CV. Luxos ID</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Input Karyawan -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="homeadmin.php">CV. Luxos ID</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="input.php">Input Karyawan</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="lihat.php">Lihat Data Karyawan</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container"><br><br>
        <h2>Input Karyawan</h2><br>
        <div class="row">
          <div>
            <form action="proses_edit.php" method="post">
            <table align="center">
                <?php 
    include "koneksi.php";
    $nik = $_GET['nik'];
    $query_mysql = mysqli_query ($koneksi,"SELECT * FROM data_pegawai WHERE nik='$nik'")or die(mysqli_error());
    $nomor = 0;
    while($data = mysqli_fetch_array($query_mysql)){
      ?>
      <form method="POST" action="proses_edit.php">   
        <table>
          <tr>
            <td>Nik</td>
            <td>
              <input style="margin-right: 100px;" type="text" name="nik" value="<?php echo $data['nik'] ?>">
            </td>         
          </tr> 
          <tr>
            <td>Nama</td>
            <td>
              <input style="margin-right: 100px;" type="text" name="nama" value="<?php echo $data['nama'] ?>">
            </td>         
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>
              <input style="margin-right: 100px;" type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>">
            </td>         
          </tr>
          <tr>
          <td>Jenis Kelamin</td>
          <td><select style="margin-right: 125px;" type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>"> 
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>         
         </tr></select>
         <tr>
          <tr>
        <td>Divisi</td>
        <td><select style="margin-right: 125px;" type="text" name="bagian" value="<?php echo $data['bagian'] ?>"> 
         <option value="HRD">HRD</option>
         <option value="Keuangan">Keuangan</option>
         <option value="Produksi">Produksi</option>
         <option value="Pemasaran">Pemasaran</option>
         <option value="Gudang">Gudang</option>
         <option value="SDM">SDM</option>
         <option value="Dana dan Jasa">Dana dan Jasa</option>
       </select></td>          
     </tr> 
          <tr>
            <td>Alamat</td>
            <td><input style="margin-right: 125px;" type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>          
          </tr>
          <tr>
        <td>Agama</td>
        <td><select style="margin-right: 125px;" type="text" name="agama" value="<?php echo $data['agama'] ?>">
          <option value="Islam">Islam</option>
          <option value="Kristen">Risten</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Konghuchu">Konghuchu</option>
        </select></td>          
      </tr>
          <td>Nomor Telephone</td>
          <td><input style="margin-right: 125px;" type="text" name="no_tlp" value="<?php echo $data['no_tlp'] ?>"></td>          
        </tr>
     <td>email</td>
     <td><input style="margin-right: 125px;" type="text" name="email" value="<?php echo $data['email'] ?>"></td>          
   </tr>
   <tr>
    <td>Foto</td> 
    <td>
      <input style="margin-right: 125px;" type="file" name="foto">
    </td>
  </tr> 

  <tr><td colspan="2"><button type="submit" value="simpan.php">SIMPAN</button></td></tr>       
</tr>       
</table>
</form>
<?php } ?>
            </table>
            </form>
          </div>
    </section>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
