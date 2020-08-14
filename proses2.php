<?php 
include 'koneksi.php';
$kode_bb = $_GET['kode_BB'];
$q = "SELECT * FROM bandingbobot where kode_BB='$kode_bb'";
$query = mysqli_query($conn,$q);
$result = mysqli_fetch_row($query);
do{
 
                   $banding = 1/$result[4];
                $jmlb = round($banding,2); 
                echo $jmlb;
               
   $sql = "insert into bandingbobot values ('','".$kode_bb."','".$result[3]."','".$result[2]."','".$jmlb."')";
    mysqli_query($conn, $sql);
   $result = mysqli_fetch_row($query);
}while($result);
header("location:proses.php");
?>
