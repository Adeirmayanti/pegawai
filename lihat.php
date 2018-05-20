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

    <!-- Navigation -->
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
  </body>
    <!-- Lihat Data Karyawan -->
    <section id="input">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <tr>
            <td height="40" align="center" bgcolor="black"><strong></strong><br>
               <h2><font color="black">DATA KARYAWAN</font></h2>
              <strong></strong></td>
        </tr>
              <table border="1" width="100%">
              <tr>
              <th>NIK</th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Bagian</th>
              <th>Alamat</th>
              <th>Agama</th>
              <th>No Telephone</th>
              <th>Email</th>
              <th>Foto</th>
              <th colspan="2">Update</th>
              </tr>
<?php 
include 'koneksi.php';
$query = "SELECT * FROM data_pegawai"; // Query untuk menampilkan semua data siswa  
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query    
while($data = mysqli_fetch_array($sql))
{ // Ambil semua data dari hasil eksekusi $sql   
  echo "<tr>";
  echo "<td>".$data['nik']."</td>";   
  echo "<td>".$data['nama']."</td>"; 
  echo "<td>".$data['tgl_lahir']."</td>"; 
  echo "<td>".$data['jenis_kelamin']."</td>"; 
  echo "<td>".$data['bagian']."</td>";
  echo "<td>".$data['alamat']."</td>";
  echo "<td>".$data['agama']."</td>";
  echo "<td>".$data['no_tlp']."</td>";
  echo "<td>".$data['email']."</td>";
  echo "<td><img src=../images/".$data['foto']." 'width='50' height='50'></td>"; 
  echo "<td><a href='edit.php?nik=".$data['nik']."'>Edit</a></td>";    
  echo "<td><a href='hapus.php?nik=".$data['nik']."'>Hapus</a></td>";
  echo "</tr>"; 
}   
?>

            </table>
          </form>
          </div>
        </div>
      </div>
    </section>

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
