<?php 
include 'koneksi.php';
$kode_bb = $_POST['kode_BB'];
$kode_k = $_POST['kode_k'];
$kode_k2 = $_POST['kode_k2'];
$nilaibobot = $_POST['nilaibobot'];
//$namakriteria= $_POST['nama_k'];
$no = $_POST['no'];
for ($i=0; $i < $no; $i++) { 
    $sql = "insert into bandingbobot values ('','".$kode_bb."','".$kode_k[$i]."','".$kode_k2[$i]."','".$nilaibobot[$i]."')";
    mysqli_query($conn, $sql);
   
    
}
header("location:proses2.php?kode_BB=$kode_bb");

	

?>