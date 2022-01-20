<?php
    if($_POST){
        $id_member=$_POST['id_member'];
        $tgl=$_POST['tgl'];
        $batas_waktu=$_POST['batas_waktu'];
        $tgl_bayar=$_POST['tgl_bayar'];
        $status=$_POST['status'];
        $dibayar=$_POST['dibayar'];
        $id_user=$_POST['id_user'];
    if (empty($id_member)) {
        echo "<script>alert('id pelanggan tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    }
    elseif (empty($tgl)) {
        echo "<script>alert('tanggal pesan tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    }
    else {
        include "koneksi.php";
        if (empty($status)) {
            $update=mysqli_query($koneksi,"update transaksi set id_member='".$id_member."',  tgl='".$tgl."', batas_waktu='".$batas_waktu."', tgl_bayar='".$tgl_bayar."', status='".$status."', dibayar='".$dibayar."', id_user='".$id_user."' where id_member = '".$id_member."' ") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update transaksi');location.href='transaksi.php';</script>";
            }
            else {
                echo "<script>alert('Gagal update transaksi');location.href='ubah_transaksi.php?id_transaksi=".$id_transaksi."';</script>";
            }
        }
            else {
                $update=mysqli_query($koneksi,"update transaksi set id_member='".$id_member."',  tgl='".$tgl."', batas_waktu='".$batas_waktu."', tgl_bayar='".$tgl_bayar."', status='".$status."', dibayar='".$dibayar."', id_user='".$id_user."' where id_member = '".$id_member."' ") or die(mysqli_error($koneksi));
                if ($update) {
                    echo "<script>alert('Sukses update transaksi');location.href='transaksi.php';</script>";
                }
                else {
                    echo "<script>alert('Gagal update transaksi');location.href='ubah_transaksi.php?id_transaksi=".$id_transaksi."';</script>";
                }
            }
        }
}
?>