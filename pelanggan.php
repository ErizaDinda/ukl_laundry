<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
    include "navbar.php";
    ?>
    <br><br>
    <div class="container">
        <div class="card">
            <div class="card-header" style="background-color: #E7A1B0;">
    <h1 class= "text-center text-white">Data Pelanggan</h1>
        <form action="pelanggan.php" method="POST" class="d-flex">
        <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            <button class="btn text-white" style="background-color: #FFB6C1;" type="submit">Search</button>
        </form>
            </div>
            <div class="card-body">
        <table class="table table-striped text-white" style="background-color: #E7A1B0;">
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
            <td><a href="ubah_pelanggan.php?id_member=<?=$data_member['id_member']?>" class="btn"style="background-color: #D3DEDC;"><img class="bi d-block mx-auto mb-1" src="foto/edit.png" width="15" height="15"></a>
            <a href="hapus_pelanggan.php?id_member=<?=$data_member['id_member']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><img class="bi d-block mx-auto mb-1" src="foto/delete.png" width="15" height="15"></a></td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    <td><a href="tambah_pelanggan.php" class="btn text-white" style="background-color: #E7A1B0;">Tambah Pelanggan</a></td>
    </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>