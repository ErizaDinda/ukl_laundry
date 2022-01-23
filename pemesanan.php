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
    include "navbar.php";
    include "navbar_side.php";
    include "koneksi.php";
    ?>
    <br><br>
    <div class="container">
        <div class="card">
            <div class="card-header" style="background-color: #15317E;">
    <h1 class= "text-center text-white">Data Transaksi</h1>
        <form action="pemesanan.php" method="POST" class="d-flex">
        <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            <button class="btn text-white" style="background-color: #0041C2;" type="submit">Search</button>
        </form>
            </div>
            <div class="card-body">
        <table class="table text-white" style="background-color: #4863A0;">
    <thead>
        <tr>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Laundry</th>
            <th scope="col">Total</th>
            <th scope="col">Status Laundry</th>
            <th scope="col">Status Pembayaran</th>
        </tr>
  </thead>
  <tbody>
  <?php
            $qry_transaksi = mysqli_query($koneksi,"SELECT a.*, b.nama, SUM(c.harga) as total FROM transaksi a JOIN member b ON a.id_member=b.id_member JOIN detail_transaksi c ON a.id_transaksi=c.id_transaksi GROUP BY a.id_transaksi");
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $qry_detail_transaksi = mysqli_query($koneksi,"SELECT a.*, b.jenis FROM detail_transaksi a JOIN paket b ON a.id_paket=b.id_paket WHERE a.id_transaksi = '".$data_transaksi['id_transaksi']."'");
                $detail = '<table border="0" style="border-collapse: collapse;">';
                while($data_detail_transaksi=mysqli_fetch_array($qry_detail_transaksi)){
                    $detail .= '
                        <tr>
                            <td>'.$data_detail_transaksi['jenis'].'</td>
                            <td>('.$data_detail_transaksi['qty'].')</td>
                            <td>'.$data_detail_transaksi['harga'].'</td>
                        </tr>
                    ';
                }
                $detail .= '</table>'; 
            ?>    
                <tr>
                    <td><?=$data_transaksi['tgl']?></td>
                    <td><?=$data_transaksi['id_transaksi']?></td>
                    <td><?=$data_transaksi['nama']?></td>
                    <td><?=$detail?></td>
                    <td>Rp <?=$data_transaksi['total']?>,00.</td>  
                    <td>
                        <form action="ubah_status" method="get">
                        <select name="status" class="form-select">
                            <option value=""selected><?=$data_transaksi['status']?></option>
                            <option value="baru">Baru</option>
                            <option value="proses">Proses</option>
                            <option value="selesai">Selesai</option>
                            <option value="diambil">Diambil</option>
                        </select>
                        <input type="submit" value="OK" name="status" class="btn" style="background-color: #D3DEDC;">
                        </form>                   
                    </td>                   
                    <td>
                        <form action="ubah_status_bayar" method="get">
                        <select name="dibayar" class="form-select">
                            <option value=""selected><?=$data_transaksi['dibayar']?></option>
                            <option value="dibayar">Dibayar</option>
                        </select>
                        <a type="submit" value="Bayar" name="status" class="btn" style="background-color: #D3DEDC;" href="ubah_bayar.php?id_member=<?php echo $data_transaksi['id_member']?>">
                            Bayar
                        </a>
                        </form>                   
                    </td> 
                    </tr>                   
            <?php 
                } 
            ?>       
    </table>
</table>
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