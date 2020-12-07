<?php
$dbConnection = mysqli_connect("localhost","root","","sik_rumah_sakit");
if(!$dbConnection) 
    die("Maaf, anda gagal terkoneksi ke database");

//if(isset($_POST["action"])){
    //echo "berhasil data ditambahkan"; 
    //$tambah_rm = mysqli_query($dbConnection, "INSERT INTO rekammedis VALUES ('".$_POST["tanggal"]."', '".$_POST[diagnosa]."')");
// $resep = $_POST['resep'];
    //if($resep!=" "){
        //$tambah_resep= mysqli_query($dbConnection, "INSERT INTO resep VALUES ('".$_POST["resep"]."')");
    //}
//}
//if($_GET["ID"]!=NULL){
     $pasienID = $_GET["ID"];
//}
?>

<html>
<head>
<title></title>
</head>
<body>    
    <form action="./berhasil_ditambahkan.php?ID=<?php echo $pasienID?>" method="post">
    <label for="tanggal">Tanggal pemeriksaan : </label><br>
    <input type="date" id="tanggal" name="tanggal"><br>
    <label for="diagnosa">Diagnosa pemeriksaan : </label><br>
    <textarea id="diagnosa" name="diagnosa"></textarea><br>
    <label for="resep">Resep Obat : </label><br>
    <textarea id="resep" name="resep"></textarea><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>