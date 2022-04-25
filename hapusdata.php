<?php
include_once("curd.php");
if(isset($_POST["txNIMLAMA"])){
    $pdata["NIM"] = $_POST["txNIMLAMA"];
    destroydata($pdata);
}
if(isset($_GET["n"])){
    
    $nim = $_GET["n"];
    $h = listdatanim($nim);
    if($h["JK"]=="L"){
        $seLaki=" selected";
        $sePerempuan = "";
    }else{
        $seLaki="";
        $sePerempuan = " selected";
    }
    if($h["JUR"]=="MTI"){
        $seMTI = " selected";
        $seKAB = "";
    }else{
        $seMTI = "";
        $seKAB = " selected";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h3>Edit Data Mahasiswa</h3>

    <form action="hapusdata.php" method="POST">
        <input type="hidden" name="txNIMLAMA" value="<?=$h["NIM"];?>">
        NIM
        <div>
        <input type="text" name="txNIM" value="<?=$h["NIM"];?>" class="form-control" disabled>
        </div>
        NAMA
        <div>
        <input type="text" name="txNAMA" value="<?=$h["NAMA"];?>" class="form-control" disabled>
        </div>
        Jenis Kelamin
        <div>
            <select name="txJK" class="form-select" disabled>
                <option value="L"<?=$seLaki;?>>Laki-Laki</option>
                <option value="P"<?=$sePerempuan;?>>Perempuan</option>
            </select>
        </div>
        TGL Lahir
        <div>
            <input type="date" name="txTALAG" value="<?=$h["TALAG"]?>" class="form-control" disabled>
        </div>
        Jurusan
        <div>
        <select name="txJUR" class="form-select" disabled>
            <option value="MTI"<?=$seMTI;?>>MTI</option>
            <option value="KAB"<?=$seKAB;?>>KAB</option>
        </select>
        </div>
        Passcode
        <div>
            <input type="password" name="txPASS" value="<?=$h["PASS"]?>" class="form-control" disabled>
        </div>

        <div>
            <button type="submit" class="btn btn-danger">Hapus Data</button>
        </div>
    </form>
</div>
</body>
</html>
<?php
}else{
    header("location: index.php");
}
?>