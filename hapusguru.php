<?php

include "koneksi.php";

//Cek apakah ada nilai dari method GET dengan nama id_anggota
if (isset($_GET['NIP'])) {
    $NIP=htmlspecialchars($_GET["NIP"]);

    $sql="delete from guru where NIP='$NIP' ";
    $hasil=mysqli_query($kon,$sql);

    //Kondisi apakah berhasil atau tidak
        if ($hasil) {
            header("Location:index3.php");

        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

        }
    }
?>