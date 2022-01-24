<?php
    include "koneksi.php";
    $id_transaksi = $_POST['id_transaksi'];
    $dibayar = $_POST['dibayar'];

    $update_status = mysqli_query($koneksi,"UPDATE transaksi set dibayar='".$dibayar."', tgl_bayar='".date('Y-m-d')."' WHERE id_transaksi = '".$id_transaksi."'");
    if ($update_status) {
        echo "<script>alert('Berhasil');location.href='pemesanan.php';</script>";
    }
    else{
        echo "<script>alert('Gagal');location.href='pemesanan.php';</script>";
    }
?>