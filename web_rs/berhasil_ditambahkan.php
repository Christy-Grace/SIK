<?php
$dbConnection = mysqli_connect("localhost","root","","sik_rumah_sakit");
if(!$dbConnection) 
    die("Maaf, anda gagal terkoneksi ke database");

    
$pasienID = $_GET["ID"];
if(isset($_POST['submit'])){
    if($_POST["resep"]!=""){
        $tambah_resep= mysqli_query($dbConnection, "INSERT INTO resep VALUES (DEFAULT,'Nadhira','".$_POST["resep"]."',$pasienID)");
    }        
    $tambah_rm = mysqli_query($dbConnection, "INSERT INTO rekammedis VALUES (DEFAULT,$pasienID,'".$_POST["tanggal"]."', '".$_POST["diagnosa"]."')");
}

?>

<!-- ingat untuk mengatasi jika belum ada inputan di awal-->
<html>
<head>
<title></title>
</head>
<body>
    <div> Hi</div>
    <a href="doctorpage.php">Kembali ke halaman pasien</a>
    
</body>

</html>