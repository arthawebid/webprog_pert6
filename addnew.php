<?php
    if(isset($_POST["txNIM"])){
        $pdata["NIM"] = $_POST["txNIM"];
        $pdata["NAMA"] = $_POST["txNAMA"];
        $pdata["JUR"] = $_POST["txJUR"];
        $pdata["JK"] = $_POST["txJK"];
        $pdata["TALAG"] = $_POST["txTALAG"];
        $pdata["PASS"] = $_POST["txPASSS"];
        include_once("curd.php");
        storedata($pdata);
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h3>Tambah Data Mahasiswa</h3>
    <form action="addnew.php" method="POST">
        NIM
        <div>
        <input type="text" name="txNIM" class="form-control" >
        </div>
        NAMA
        <div>
        <input type="text" name="txNAMA" class="form-control" >
        </div>
        Jenis Kelamin
        <div>
            <select name="txJK" class="form-select">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        TGL Lahir
        <div>
            <input type="date" name="txTALAG" class="form-control" >
        </div>
        Jurusan
        <div>
        <select name="txJUR" class="form-select">
            <option value="MTI">MTI</option>
            <option value="KAB">KAB</option>
        </select>
        </div>
        Passcode
        <div>
            <input type="password" name="txPASSS" class="form-control" >
        </div>

        <div class="input-group">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>