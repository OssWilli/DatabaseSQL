<?php

include "koneksi.php";

//Cek apakah ada nilai dari method GET dengan nama id_anggota
if (isset($_GET['nip'])) {
    $nip=htmlspecialchars($_GET["nip"]);

    $sql="DELETE FROM mengajar WHERE nip='$nip' ";
    $hasil=mysqli_query($kon,$sql);

    //Kondisi apakah berhasil atau tidak
        if ($hasil) {
            header("Location:mengajar.php");

        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

        }
    }
?>