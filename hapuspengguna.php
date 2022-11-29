<?php

include "koneksi.php";

//Cek apakah ada nilai dari method GET dengan nama id_anggota
if (isset($_GET['Nama_pengguna'])) {
    $Nama_pengguna=htmlspecialchars($_GET["Nama_pengguna"]);

    $sql="delete from pengguna where Nama_pengguna='$Nama_pengguna' ";
    $hasil=mysqli_query($kon,$sql);

    //Kondisi apakah berhasil atau tidak
        if ($hasil) {
            header("Location:pengguna.php");

        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

        }
    }
?>