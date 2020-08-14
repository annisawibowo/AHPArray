
<?php 
include 'koneksi.php';
$idkriteria = $_POST['kode_k'];
$kdsk=$_POST['kdsk'];
$namakriteria= $_POST['nama_k'];
$no = $_POST['no'];
for ($i=0; $i < 4; $i++) { 
    $sql = "insert into kriteria values ('".$idkriteria[$i]."','".$kdsk."','".$namakriteria[$i]."')";
    mysqli_query($conn, $sql);
   
    
}
header("location:proses.php?kdsk=$kdsk");

	

?>