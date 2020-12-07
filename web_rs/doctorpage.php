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
    <div>Hai Dokter!</div>
    <div>Jadwal Hari Ini</div>
    <table>

    <!-- sebenarnya mau ngejoin table pasien dengan pendaftaran -->
    <tr>
        <th>ID Pasien</th>
        <th>Nama Pasien</th>
        <th>Jam Berobat</th>
    </tr>
    <?php
        $pasienSql = mysqli_query($dbConnection, "Select pasienID,pasienNama from pasien");
        
        while($daftar_pasien = mysqli_fetch_array($pasienSql)){
            echo "<tr>";
                echo "<td> <a href= 'rekammedispage.php?ID={$daftar_pasien["pasienID"]}'>".$daftar_pasien["pasienID"]. "</a></td>";
                echo "<td>".$daftar_pasien["pasienNama"]."</td>";
            echo "</tr>";
        }

    
    ?>
    <table>
</body>
</html>
