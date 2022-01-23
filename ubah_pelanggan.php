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
<main id="main" class="main"> 
    <?php
    include "koneksi.php";
    include "navbar.php";
    include "navbar_side.php";
    $qry_get_member = mysqli_query($koneksi, "select * from member where id_member = '".$_GET['id_member']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <div class="p-3 mb-2">
    <div class = "container">
    <h3  class = "text-center">Edit Pelanggan</h3> 
    <form action="proses_ubah_pelanggan.php" method="post">
        <input type = "hidden" name="id_member" value ="<?=$dt_member['id_member']?>">
        Nama Pelanggan :
        <br><input type ="text" name ="nama" value ="<?=$dt_member['nama']?>" class = "form-control"></br>
        Alamat :
        <br><textarea name="alamat" class="form-control" rows="4"><?=$dt_member['alamat']?></textarea></br>
        Gender :
        <br><?php 
        $arr_jenis_kelamin=array('Laki-laki'=>'Laki-laki', 'Perempuan'=>'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_jenis_kelamin as $key_jenis_kelamin => $val_jenis_kelamin):
                if($key_jenis_kelamin==$dt_member['jenis_kelamin']){
                    $select="selected";
                } else {
                    $select="";
                }
             ?>
            <option value="<?=$key_jenis_kelamin?>"<?=$select?>><?=$val_jenis_kelamin?></option>
            <?php endforeach ?>
        </select></br>
        No Telpon : 
        <br><input type="number" name="tlp" value="<?=$dt_member['tlp']?>" class="form-control"></br>
        <input type="submit" name="simpan" value="Update Pelanggan" class="w-100 btn btn-lg text-white" style="background-color:  #15317E">
        </br>
    </form>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->
    </div>
            </main>
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