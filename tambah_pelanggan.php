<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <div class="container">
    <h3 class="text-center">Tambah Pelanggan</h3>
    <form action="proses_tambah_pelanggan.php" method="post">
        <br>
        Nama Pelanggan :
        <input type="text" name="nama" value="" class="form-control">
        <br>
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        <br>
        Gender : 
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        Telp : 
        <input type="number" name="tlp" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Tambah Pelanggan" class="w-100 btn btn-lg text-white" style="background-color:#E7A1B0;">
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>