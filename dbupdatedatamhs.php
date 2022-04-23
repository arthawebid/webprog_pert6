<?php
    /**
     * Update Data
     * 1. Buka koneksi dan buka database mhs
     * 2. buat query update data
     * 3. execute
     * 4. tutup koneksi
     * 5. kembali ke list data mhs
     */
    include_once("dbkoneksi2.php");
    
    if(isset($_POST["txNIM"])){
        $nim = $_POST["txNIM"];
        $nama = $_POST["txNAMA"];
        $talag = $_POST["txTALAG"];
        $jk = $_POST["txJK"];
        $jur = $_POST["txJUR"];
        $passs = $_POST["txPASSS"];
        $nimlama = $_POST["txNIMLAMA"];

        $sql = "UPDATE mhs SET 
            NIM='$nim', 
            NAMA='$nama',
            TGLLAHIR = '$talag',
            JK = '$jk',
            JURUSAN = '$jur',
            PASSCODE = '$passs'
            WHERE NIM='$nimlama';";
        
            //echo "DEBUG: ".$sql;

        $hsl = mysqli_query($cnn, $sql);
        mysqli_close($cnn);
    }
    header("location: tampildatamhs.php");