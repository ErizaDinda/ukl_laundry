<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
    include "koneksi.php";
    include "navbar.php";
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
        <input type="submit" name="simpan" value="Update Pelanggan" class="w-100 btn btn-lg text-white" style="background-color: #E7A1B0;">
        </br>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
</body>
</html>