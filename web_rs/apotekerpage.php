<?php
$dbConnection = mysqli_connect("localhost","root","","sik_rumah_sakit");
if(!$dbConnection) 
    die("Maaf, anda gagal terkoneksi ke database");
?>

<!-- ingat untuk mengatasi jika belum ada inputan di awal-->
<html>
<head>
<title></title>
<style>
#btn{
    background-color : red;
    text-align: center;
}
</style>

</head>
<body>
    <div>Resep Obat Hari Ini</div><br>
    <table>

    <!-- sebenarnya mau ngejoin table pasien dengan pendaftaran -->
    <tr>
        <th>ID Pasien</th>
        <th>Resep</th>
    </tr>
    <?php
        $resepSql = mysqli_query($dbConnection, "Select* from resep");
        
        while($daftar_resep = mysqli_fetch_array($resepSql)){
            echo "<tr>";
                echo "<td>".$daftar_resep["pasienID"]."</td>";
                echo "<td>".$daftar_resep["resepDaftar"]."</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>

</html>