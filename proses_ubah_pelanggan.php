<?php
if ($_POST) {
    $id_member=$_POST['id_member'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
    if (empty($nama)) {
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    }
    elseif (empty($tlp)) {
        echo "<script>alert('no telpon tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    }
    else {
        include "koneksi.php";
        if (empty($password)) {
            $update=mysqli_query($koneksi,"update member set nama='".$nama."',  alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', tlp='".$tlp."' where id_member = '".$id_member."' ") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update pelanggan');location.href='pelanggan.php';</script>";
            }
            else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_member=".$id_member."';</script>";
            }
        }
            else {
                $update=mysqli_query($koneksi,"update member set nama='".$nama."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', tlp='".$tlp."' where id_member = '".$id_member."'") or die(mysqli_error($koneksi));
                if ($update) {
                    echo "<script>alert('Sukses update pelanggan');location.href='pelanggan.php';</script>";
                }
                else {
                    echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_member=".$id_member."';</script>";
                }
            }
        }
}
?>