<?php

$host = "localhost";
$user = "root";
$pass = ""; //kalau kosong ""
$dbs  = "mahasiswa";

$conn = new mysqli($host, $user, $pass, $dbs);

if ($conn->connect_error) {
    die("No Connection to Database");
}

$sql = "SELECT * FROM data_diri";

if ($conn->query($sql)) {
    $hasil = $conn->query($sql);

    if($hasil->num_rows > 0) {

        while($row = $hasil->fetch_assoc()) {
            echo $row['nim']." ".$row['jenis_kelamin']." ".$row['tpt_lahir']." ".$row['tgl_lahir']." ".$row['alamat'];
            echo "<br>";
        }
    }
} else {
    echo "Perintah Gagal Dijalankan";
}
?>