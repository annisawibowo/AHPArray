<?php 
include 'koneksi.php';


$jumlah=0;
 $j=1;
$jumlah2=0;
$jumlah3=0;
$jumlah4=0;
$temp=0;
//$i=0;
for ($i=0;$i<4;$i++){
    $q = "SELECT * FROM bandingbobot";
    $query = mysqli_query($conn,$q);
    $result = mysqli_fetch_row($query);

    ?> <br> <?php
    echo 'dibuka';
    ?> <br> <?php
// $result = mysqli_fetch_row($query);
do
{
if($j==7 and $i==0)  {
    echo $result[4];
    $temp=$result[4];
    $jumlah+=$temp; ?> <br> <?php
}
else if ($j==13 and $i==1){
 //  echo $j;
    echo $result[4];
    $temp=$result[4];
    $jumlah2+=$temp; ?> <br> <?php
    //echo 'kedua';
}

else if($j==8 and $i==0 ){
    echo $result[4];
    $temp=$result[4];
    $jumlah+=$temp; 
    ?> <br> <?php
}
else if ($j==22 and $i==1){
   // echo 'kedua';
    echo $result[4];
    $temp=$result[4];
    $jumlah2+=$temp; ?> <br> <?php
 
}
else if ($j==9 and $i==0 ){
    
    echo $result[4];
    $temp=$result[4];
    $jumlah+=$temp; 
    ?> <br> <?php
   
    echo $jumlah;
}
else if ($j==23 and $i==1){
    echo $result[4];
    $temp=$result[4];
    $jumlah2+=$temp; ?> <br> <?php
    echo $jumlah2;
}
else if ($j==26 and $i==2){
    // echo 'kedua';
     echo $result[4];
     $temp=$result[4];
     $jumlah3+=$temp; ?> <br> <?php
  
 }
 else if ($j==28 and $i==2){
    // echo 'kedua';
     echo $result[4];
     $temp=$result[4];
     $jumlah3+=$temp; ?> <br> <?php
  
 }
 else if ($j==36 and $i==2){
    // echo 'kedua';
     echo $result[4];
     $temp=$result[4];
     $jumlah3+=$temp; ?> <br> <?php
     echo $jumlah3;
  
 }
 else if ($j==39 and $i==3){
    // echo 'kedua';
     echo $result[4];
     $temp=$result[4];
     $jumlah4+=$temp; ?> <br> <?php
  
 }
 else if ($j==41 and $i==3){
    // echo 'kedua';
     echo $result[4];
     $temp=$result[4];
     $jumlah4+=$temp; ?> <br> <?php
  
 }
 else if ($j==42 and $i==3){
    // echo 'kedua';
     echo $result[4];
     $temp=$result[4];
     $jumlah4+=$temp; ?> <br> <?php
  echo $jumlah4;
 }

  $j++;
  
 // echo $result[4];
$result = mysqli_fetch_row($query);

}while($result);
//echo 'masuk'; 
}
?>
