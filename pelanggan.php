<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LAUNDRY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 
</head>
<body>
<?php
    include "navbar.php";
    include "navbar_side.php";
    ?>
    <br><br>
    <main id="main" class="main"> 
    <div class="container">
        <div class="card">
            <div class="card-header" style="background-color: #15317E;">
    <h1 class= "text-center text-white">Data Pelanggan</h1>
        <form action="pelanggan.php" method="POST" class="d-flex">
        <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            <button class="btn text-white" style="background-color: #0041C2;" type="submit">Search</button>
        </form>
            </div>
            <div class="card-body">
        <table class="table table-striped text-white" style="background-color: #4863A0;">
    <thead>
        <tr>
            <th scope="col">ID Pelanggan</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Gender</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Aksi</th>
        </tr>
  </thead>
  <tbody>
      <?php
      include "koneksi.php";
      if (isset($_POST["cari"])) {
          //jika ada keyword pencarian
          $cari = $_POST['cari'];
          $qry_member = mysqli_query($koneksi, "select * from member where id_member='$cari' or nama like'%$cari%'");
      }
      else {
      $qry_member=mysqli_query($koneksi,"select * from member");
      }

      while($data_member=mysqli_fetch_array($qry_member)){
      ?>
        <tr>
            <td><?php echo $data_member["id_member"]; ?></td>
            <td><?php echo $data_member["nama"]; ?></td>
            <td><?php echo $data_member["alamat"]; ?></td>
            <td><?php echo $data_member["jenis_kelamin"]; ?></td>
            <td><?php echo $data_member["tlp"]; ?></td>
            <td><a href="tambah_pemesanan.php?id_member=<?=$data_member['id_member']?>" class="btn"style="background-color: #D3DEDC;"><img class="bi d-block mx-auto mb-1" src="foto/click.png" width="15" height="15"></a>
            <a href="ubah_pelanggan.php?id_member=<?=$data_member['id_member']?>" class="btn"style="background-color: #D3DEDC;"><img class="bi d-block mx-auto mb-1" src="foto/edit.png" width="15" height="15"></a>
            <a href="hapus_pelanggan.php?id_member=<?=$data_member['id_member']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><img class="bi d-block mx-auto mb-1" src="foto/delete.png" width="15" height="15"></a></td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    <td><a href="tambah_pelanggan.php" class="btn text-white" style="background-color: #15317E">Tambah Pelanggan</a></td>
    </div>
        </div>
    </div>
</main>
    <!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>