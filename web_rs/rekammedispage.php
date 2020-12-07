<?php
$dbConnection = mysqli_connect("localhost","root","","sik_rumah_sakit");
if(!$dbConnection) 
    die("Maaf, anda gagal terkoneksi ke database");
?>

<html>
<head>
<title></title>
</head>
<body>
    
    <?php
        $pasienID = $_GET["ID"];
        $rekamMedisSql = mysqli_query($dbConnection,"Select rekamMedisTanggal,rekamMedisDiagnosa FROM rekammedis WHERE pasienID=$pasienID");
        $namaPasienSql = mysqli_query($dbConnection,"Select pasienNama FROM pasien WHERE pasienID=$pasienID");
        $namaPasien = mysqli_fetch_row($namaPasienSql);
        echo "Nama pasien : ".$namaPasien[0]."<br><br>";
        echo "<a href='tambahrekammedis.php?ID=$pasienID'>+ rekam medis</a><br><br>";
        while($daftar_rekamMedis = mysqli_fetch_row($rekamMedisSql)){
            echo $daftar_rekamMedis[0]." ".$daftar_rekamMedis[1]."<br>";
        }
    ?>
</body>

</html>