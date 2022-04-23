<?php
    /**
     * Menghapus data mhs berdasarkan NIM
     * 1. buka koneksi
     * 2. buat sql 
     * 3. execute sql
     * 4. tutup koneksi
     * 5. kembali ke list data mhs
     */
    include_once("dbkoneksi2.php");

    if(isset($_GET["n"])){
        $sql = "DELETE FROM mhs WHERE NIM='".$_GET["n"]."'";
        $hsl = mysqli_query($cnn, $sql);
    }
    mysqli_close($cnn);
    header("location: tampildatamhs.php");