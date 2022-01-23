<?php
    include "koneksi.php";
    $id_member = $_GET['id_member'];
    echo $id_member;

    $update_bayar = mysqli_query($koneksi,"UPDATE transaksi set tgl_bayar='".date('Y-m-d')."', dibayar='dibayar' WHERE id_member = '".$id_member."'");
    if ($update_bayar) {
        echo "<script>alert('Berhasil');location.href='pemesanan.php';</script>";
    }
    else{
        echo "<script>alert('Gagal');location.href='pemesanan.php';</script>";
    }
?>