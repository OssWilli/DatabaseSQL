<?php

include "koneksi.php";

//Cek apakah ada nilai dari method GET dengan nama id_anggota
if (isset($_GET['Kd_ortu'])) {
    $Kd_ortu=htmlspecialchars($_GET["Kd_ortu"]);

    $sql="delete from orang_tua where Kd_ortu='$Kd_ortu' ";
    $hasil=mysqli_query($kon,$sql);

    //Kondisi apakah berhasil atau tidak
        if ($hasil) {
            header("Location:ortu.php");

        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

        }
    }
?>