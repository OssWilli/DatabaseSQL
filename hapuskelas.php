<?php

include "koneksi.php";

//Cek apakah ada nilai dari method GET dengan nama id_anggota
if (isset($_GET['id_kelas'])) {
    $id_kelas=htmlspecialchars($_GET["id_kelas"]);

    $sql="DELETE FROM kelas WHERE id_kelas='$id_kelas' ";
    $hasil=mysqli_query($kon,$sql);

    //Kondisi apakah berhasil atau tidak
        if ($hasil) {
            header("Location:kelas.php");

        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

        }
    }
?>