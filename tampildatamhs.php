<?php
    /**
     * 1. buat koneksi ke DBMS mysql dan buka database mahasiswa
     * 2. buat query untuk menampilkan seluruh data dari tabel mhs
     * 3. execute query
     * 4. tampilkan data
     * 5. tutup koneksi
     */
    include_once("dbkoneksi2.php");

    $sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE FROM mhs;";

    $hsl = mysqli_query($cnn, $sql);

    echo "<table>
            <theader>
                <tr>    
                <th>No</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>Jurusan</th>
                <th>JenisKelamin</th>
                <th>TglLahir</th>
                <th>Passcode</th>
                <th><a href='Insertdatamhs.php'>TambahData</a></th>
                </tr>
            </theader>
            <tbody>";
            $no =1;
            while($h = mysqli_fetch_Array($hsl) ){
                if($h["JK"]=="L"){
                    $jk = "Laki-Laki";
                }else{
                    $jk = "Perempuan";
                }
                echo "    <tr> 
                    <td>".$no."</td>
                    <td>".$h["NIM"]."</td>
                    <td>".$h["NAMA"]."</td>
                    <td>".$h["JURUSAN"]."</td>
                    <td>".$jk."</td>
                    <td>".$h["TGLLAHIR"]."</td>
                    <td>".$h["PASSCODE"]."</td>
                    <td><a href='editdatamhs.php?n=".$h["NIM"]."'>Edit</a> | <a href='hpsdatamhs.php?n=".$h["NIM"]."'>Delete</a></td>
                </tr>";
                $no++;
            }
    echo "        </tbody>
    </table>";
