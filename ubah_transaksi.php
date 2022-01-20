<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
    include "koneksi.php";
    include "navbar.php";
    $qry_get_transaksi = mysqli_query($koneksi, "select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
    $dt_transaksi=mysqli_fetch_array($qry_get_transaksi);
    ?>
    <div class="p-3 mb-2">
    <div class = "container">
    <h3  class = "text-center">Edit Transaksi</h3> 
    <form action="proses_ubah_transaksi.php" method="post">
        <input type = "hidden" name="id_transaksi" value ="<?=$dt_transaksi['id_transaksi']?>">
        Nama Pelanggan :
        <select name="id_member" class="form-control"> 
            <option></option>
            <?php
            include "koneksi.php";
            $qry_member=mysqli_query($koneksi, "select * from member");
            while ($data_member=mysqli_fetch_array($qry_member)){
                if($data_member['id_member']==$dt_transaksi['id_member']){
                    $select="selected";
                } else {
                    $select="";
                }
                echo '<option value="'.$data_member['id_member'].'" '.$select.'>'.$data_member['nama'].'</option>';  
            }
            ?>
        </select><br>
        Tanggal Pemesanan :
        <input type="date" name="tgl" value="<?=$dt_transaksi['tgl']?>" class="form-control">
        <br>
        Batas Waktu :
        <input type="date" name="batas_waktu" value="<?=$dt_transaksi['batas_waktu']?>" class="form-control">
        <br>
        Tanggal Bayar :
        <input type="date" name="tgl_bayar" value="<?=$dt_transaksi['tgl_bayar']?>" class="form-control">
        <br>
        Status :
        <?php 
        $arr_status=array('baru'=>'baru', 'proses'=>'proses', 'selesai'=>'selesai', 'diambil'=>'diambil');
        ?>
        <select name="status" class="form-control">
            <option></option>
            <?php foreach ($arr_status as $key_status => $val_status):
                if($key_status==$dt_transaksi['status']){
                    $select="selected";
                } else {
                    $select="";
                }
             ?>
            <option value="<?=$key_status?>"<?=$select?>><?=$val_status?></option>
            <?php endforeach ?>
        </select>
        <br>
        Dibayar :
        <?php 
        $arr_dibayar=array('dibayar'=>'dibayar', 'belum_dibayar'=>'belum_dibayar');
        ?>
        <select name="dibayar" class="form-control">
            <option></option>
            <?php foreach ($arr_dibayar as $key_dibayar => $val_dibayar):
                if($key_dibayar==$dt_transaksi['dibayar']){
                    $select="selected";
                } else {
                    $select="";
                }
             ?>
            <option value="<?=$key_dibayar?>"<?=$select?>><?=$val_dibayar?></option>
            <?php endforeach ?>
        </select></br>
        </select>
        <br>
        Id User :
        <select name="id_user" class="form-control"> 
            <option></option>
            <?php
            include "koneksi.php";
            $qry_user=mysqli_query($koneksi, "select * from user");
            while ($data_user=mysqli_fetch_array($qry_user)){
                if($data_user['id_user']==$dt_transaksi['id_user']){
                    $select="selected";
                } else {
                    $select="";
                }
                echo '<option value="'.$data_user['id_user'].'" '.$select.'>'.$data_user['nama'].'</option>';  
            }
            ?>
        </select><br>
        
        <input type="submit" name="simpan" value="Update Pelanggan" class="w-100 btn btn-lg text-white" style="background-color: #92A9BD;">
        </br>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
</body>
</html>