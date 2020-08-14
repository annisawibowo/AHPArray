<?php 
include 'koneksi.php';
$kode_ba = $_POST['kode_ba'];
$kode_alter = $_POST['kode_alter'];
$kode_alter2 = $_POST['kode_alter2'];
$kode_k = $_POST['kode_k'];
$nilaibobot = $_POST['BOBOT'];

$no = $_POST['no'];
for ($i=0; $i < $no; $i++) { 
    $sql = "insert into bandingalter values ('".$kode_ba."','".$nilaibobot[$i]."','','".$kode_alter[$i]."','".$kode_k."','".$kode_alter2[$i]."')";
    mysqli_query($conn, $sql);
   
    
}
header("location:prosesba.php?kode_ba=$kode_ba");

	

?>