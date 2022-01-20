<?php
    if($_POST){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
        $tlp=$_POST['tlp'];
        if (empty($nama)) {
            echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        }

        elseif (empty($alamat)) {
            echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        }

        elseif (empty($tlp)) {
            echo "<script>alert('no telpon tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        }

        else {
            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into member (nama, alamat, jenis_kelamin, tlp)
            value
            ('".$nama."','".$alamat."','".$jenis_kelamin."','".$tlp."')") or die(mysqli_error($koneksi));
            if ($insert) {
                echo "<script>alert('Sukses menambahkan pelanggan');location.href='pelanggan.php';</script>";
            }

            else {
                echo "<script>alert('Gagal menambahkan pelanggan');location.href='pelanggan.php';</script>";
            }
        }
    }
?>