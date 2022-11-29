<?php

include "koneksi.php";

//Cek apakah ada nilai dari method GET dengan nama id_anggota
if (isset($_GET['id_mapel'])) {
    $id_mapel=htmlspecialchars($_GET["id_mapel"]);

    $sql="DELETE FROM mapel WHERE id_mapel='$id_mapel' ";
    $hasil=mysqli_query($kon,$sql);

    //Kondisi apakah berhasil atau tidak
        if ($hasil) {
            header("Location:mapel.php");

        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

        }
    }
?>