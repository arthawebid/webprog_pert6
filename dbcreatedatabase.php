<?php
    /**
     * Untuk membuat database:
     * 1. koneksi ke DBMS mySQL
     * 2. script SQL untuk create database
     * 3. execute script tersebut
     */
    include_once("dbkoneksi.php");
    if($cnn){
        $sql = "CREATE DATABASE mahasiswa;";

        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            echo "Database mahasiswa <strong>sukses</strong> dibuat<br>";
        }else{
            echo "Database mahasiswa <strong>gagal</strong> dibuat<br>";
        }
        mysqli_close($cnn);
    }