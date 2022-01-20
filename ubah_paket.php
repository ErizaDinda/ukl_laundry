<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Paket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
    include "koneksi.php";
    include "navbar.php";
    $qry_get_paket = mysqli_query($koneksi, "select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <div class="p-3 mb-2">
    <div class = "container">
    <h3  class = "text-center">Edit Paket</h3> 
    <form action="proses_ubah_paket.php" method="post">
        <input type = "hidden" name="id_paket" value ="<?=$dt_paket['id_paket']?>">
        Jenis Laundry :
        <br><input type ="text" name ="jenis" value ="<?=$dt_paket['jenis']?>" class = "form-control"></br>
        Harga : 
        <br><input type="number" name="harga" value="<?=$dt_paket['harga']?>" class="form-control"></br>
        Proses Pengerjaan : 
        <br><input type="number" name="proses" value="<?=$dt_paket['proses']?>" class="form-control"></br>
        <input type="submit" name="simpan" value="Update Paket" class="w-100 btn btn-lg text-white" style="background-color: #E7A1B0;">
        </br>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
</body>
</html>