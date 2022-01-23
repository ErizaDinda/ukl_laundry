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
 
<body>
<main id="main" class="main"> 
    <?php
        include "navbar.php";
        include "navbar_side.php";
    ?>
    <div class="container">
    <h3 class="text-center">Tambah Pemesanan</h3> 
    <form action="proses_tambah_pemesanan.php" method="post">
        <br>
        Pelanggan :
        <select name="id_member" class="form-control">
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($koneksi,"select * from member");
            while($data_member=mysqli_fetch_array($qry_member)){
                echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama'].'</option>';    
            }
            ?>
        </select>
        <br>
        Batas Waktu :  
        <input type="date" name="batas_waktu" value="" class="form-control" require>
        <br>
        <!-- Bayar :  
        <input type="date" name="tgl_bayar" value="" class="form-control" require> -->
        <br>
        <table class="table text-white" style="background-color:  #4863A0;">
            <tr>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Qty</th>
            </tr>
            <?php 
                include "koneksi.php";
                $qry_paket=mysqli_query($koneksi,"select * from paket");
                while($data_paket=mysqli_fetch_array($qry_paket)){
                    echo '<tr>
                        <td> 
                            <input type="checkbox" id="'.$data_paket['id_paket'].'" name="'.$data_paket['id_paket'].'" value="'.$data_paket['id_paket'].'">
                            <label for="'.$data_paket['id_paket'].'"> '.$data_paket['jenis'].'</label></td>
                        <td>
                            <input type="number" name="harga_'.$data_paket['id_paket'].'" value="'.$data_paket['harga'].'" readonly>
                        </td>
                        <td>
                            <input type="number" name="qty_'.$data_paket['id_paket'].'" value="">
                        </td>
                    </tr>';    
                }
            ?>
        </table>
        <input type="submit" name="simpan" value="Tambah Pemesanan" class="w-100 btn btn-lg text-white" style="background-color: #15317E;">
    </form>
    </div>
    </div>
        </main> 
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