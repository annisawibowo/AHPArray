
<?php 
include 'koneksi.php';
$kdsk=$_POST['kdsk'];
$namask= $_POST['namask'];
$alert='aktif';
$q = "SELECT * FROM awal ";
$query = mysqli_query($conn,$q);
$result = mysqli_fetch_row($query);
$count=mysqli_num_rows($query);
$jumlah = $count-1;
$j=0;
$alert='non';
do{  
    
  
   if($kdsk==$result[0]){
     $alert='aktif';
   

   }
  
    $result = mysqli_fetch_row($query);
   
}while($result);
$sql = "insert into awal values ('".$kdsk."','".$namask."')";
mysqli_query($conn, $sql);
header("location:index.php?alert=$alert&kdsk=$kdsk");

//
//echo 'masuk1';

//header("location:index1.php?kdsk=$kdsk");
 
?>