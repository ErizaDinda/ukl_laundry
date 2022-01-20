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
            echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        }

        elseif (empty($tgl_bayar)) {
            echo "<script>alert('no telpon tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        }

        else {
            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into transaksi (id_member, tgl, batas_waktu, tgl_bayar, status, dibayar, id_user)
            value
            ('".$id_member."','".$tgl."','".$batas_waktu."','".$tgl_bayar."','".$status."','".$dibayar."','".$id_user."')") or die(mysqli_error($koneksi));
            if ($insert) {
                echo "<script>alert('Sukses menambahkan transaksi');location.href='transaksi.php';</script>";
            }

            else {
                echo "<script>alert('Gagal menambahkan transaksi');location.href='transaksi.php';</script>";
            }
        }
    }
?>