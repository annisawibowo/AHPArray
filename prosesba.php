<?php 
include 'koneksi.php';
$kode_ba = $_GET['kode_ba'];
$q = "SELECT * FROM bandingalter where kode_ba='$kode_ba'";
$query = mysqli_query($conn,$q);
$result = mysqli_fetch_row($query);
do{
 
                   $banding = 1/$result[1];
                $jmlb = round($banding,2); 
               
$sql = "insert into bandingalter values ('".$kode_ba."','".$jmlb."','','".$result[5]."','".$result[4]."','".$result[3]."')";
mysqli_query($conn, $sql);
   $result = mysqli_fetch_row($query);
}while($result);
header("location:proses.php");
?>