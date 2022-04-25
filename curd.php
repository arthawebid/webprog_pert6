<?php
    include_once("konfigurasi.php");

    function storedata($pdata){
        $NIM= $pdata["NIM"];
        $NAMA=$pdata["NAMA"];
        $JUR=$pdata["JUR"];
        $JK=$pdata["JK"];
        $TALAG=$pdata["TALAG"];
        $PASS=$pdata["PASS"];
        $sql = "INSERT INTO mhs(NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE) 
        VALUES('$NIM', '$NAMA', '$JUR', '$JK', '$TALAG', '$PASS');";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal<br>");
        $hsl = mysqli_query($cnn, $sql);
        return $hsl;
    }
    function updatedata($pdata){
        $NIM= $pdata["NIM"];
        $NAMA=$pdata["NAMA"];
        $JUR=$pdata["JUR"];
        $JK=$pdata["JK"];
        $TALAG=$pdata["TALAG"];
        $PASS=$pdata["PASS"];
        $sql = "UPDATE mhs SET NIM='". $pdata["NIM2"] ."', NAMA='".$pdata["NAMA"]."', JURUSAN='".$pdata["JUR"]."', JK='".$pdata["JK"]."', TGLLAHIR='".$pdata["TALAG"]."', PASSCODE='".$pdata["PASS"]."' WHERE NIM = '". $pdata["NIM1"] . "';";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal<br>");
        $hsl = mysqli_query($cnn, $sql);
        return $hsl;
    }
    function destroydata($pdata){
        $nim = $pdata["NIM"];
        $sql = "DELETE FROM mhs WHERE NIM='".$nim."';";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal<br>");
        $hsl = mysqli_query($cnn, $sql);
    }
    function listdata(){
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal<br>");
        $sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE FROM mhs;";
        $hsl =mysqli_query($cnn,$sql);
        $hsl1 = "";
        $no = 1;
        while($h = mysqli_fetch_array($hsl)){
            if($h["JK"]=="L"){
                $jk = "Laki-Laki";
            }else{
                $jk = "Perempuan";
            }
            $hsl1 .= '<tr>
            <td>'.$no.'</td>
            <td>'.$h["NIM"].'</td>
            <td>'.$h["NAMA"].'</td>
            <td>'.$h["JURUSAN"].'</td>
            <td>'.$jk.'</td>
            <td>'.$h["PASSCODE"].'</td>
            <td><a class="btn btn-warning" href="editdata.php?n='.$h["NIM"].'">Edit</a> <a class="btn btn-danger" href="hapusdata.php?n='.$h["NIM"].'">Hapus</a></td>
        </tr>';
        $no++;
        }
        return $hsl1;
    }
    function listdatanim($nim){
        $sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE FROM mhs WHERE NIM='$nim';";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal<br>");
        $hsl = mysqli_query($cnn, $sql);
        $h = mysqli_fetch_array($hsl);
        $pdata["NIM"] = $h["NIM"];
        $pdata["NAMA"] = $h["NAMA"];
        $pdata["JUR"] = $h["JURUSAN"];
        $pdata["JK"] = $h["JK"];
        $pdata["TALAG"] = $h["TGLLAHIR"];
        $pdata["PASS"] = $h["PASSCODE"];
        return $pdata;
    }
