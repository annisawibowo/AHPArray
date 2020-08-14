
<?php 
include 'koneksi.php';
$kdsk=$_POST['kdsk'];
$idalter = $_POST['kode_alter'];
$namaalter= $_POST['nama_alter'];
$no = $_POST['no'];
for ($i=0; $i < 4; $i++) { 
    $sql = "insert into alternatif values ('".$idalter[$i]."','".$kdsk."','".$namaalter[$i]."')";
    mysqli_query($conn, $sql);
   
    
}

header("location:inputmaster.php?kdsk=$kdsk");
	

?>