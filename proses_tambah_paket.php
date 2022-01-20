<?php
    if($_POST){
        $jenis=$_POST['jenis'];
        $harga=$_POST['harga'];
        $proses=$_POST['proses'];
        if (empty($jenis)) {
            echo "<script>alert('jenis laundry tidak boleh kosong');location.href='tambah_paket.php';</script>";
        }

        elseif (empty($harga)) {
            echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
        }

        elseif (empty($proses)) {
            echo "<script>alert('proses pengerjaan tidak boleh kosong');location.href='tambah_paket.php';</script>";
        }

        else {
            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into paket (jenis, harga, proses)
            value
            ('".$jenis."','".$harga."','".$proses."')") or die(mysqli_error($koneksi));
            if ($insert) {
                echo "<script>alert('Sukses menambahkan paket');location.href='paket.php';</script>";
            }

            else {
                echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
            }
        }
    }
?>