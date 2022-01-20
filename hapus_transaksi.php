<?php 
    if($_GET['id_transaksi']){ 
        include "koneksi.php";
        $qry_hapus=mysqli_query($koneksi,"DELETE FROM transaksi where id_transaksi='".$_GET['id_transaksi']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus transaksi');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus transaksi');location.href='transaksi.php';</script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>
