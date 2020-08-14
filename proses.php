<!DOCTYPE html>
<?php  

include 'koneksi.php';
include 'boothstrap.html';
// $query = "SELECT * FROM kriteria ";
if (isset($_GET['kdsk']) )
{
	$kdsk=$_GET['kdsk'];
}
else
{
   header("location: index.php");
}
//$kdsk='001';

// $result = mysqli_query($conn, $query);
?>
<html>
<head>
	<title>AHP PROJECT</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<script type="text/javascript"> 
			$(function(){
				var url = window.location.href; 
				$(".container a").each(function() {
					if(url == (this.href)) { 
						$(this).closest("li").addClass("active");
					}
				});
			});
	</script>	
</head>
<body background="img/bgputih.png">
	<div class="wrapper">
		<div class="top"> <img src="img/headernew.png"> </div>
		<div class="mid">
			<div class="note">PROSES KEPUTUSAN</div>
			<div class="menu">
			<ul>
			<div class="hp"> <a href="#">
            <li>Home Page</li>
        </a> </div>
   
    <div class="mhs"> <a href="#">
            <li>Alter&Krit</li>
        </a> </div>
    <div class="pk"> <a href="#">
            <li>Ps. Keputusan</li>
        </a> </div>
	
		<div class="sk"> <a href="index.php">
            <li>Buat Studi Kasus</li>
        </a> </div>

</ul>
			</div> <div class="content">
			<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">K vs K</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">K1 vs AL</a>
	<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">K2 vs AL</a>
	<a class="nav-item nav-link" id="nav-profil-tab" data-toggle="tab" href="#nav-profil" role="tab" aria-controls="nav-profil" aria-selected="false">K3 vs AL</a>
	<a class="nav-item nav-link" id="nav-contac-tab" data-toggle="tab" href="#nav-contac" role="tab" aria-controls="nav-contac" aria-selected="false">K4 vs AL</a>
	<a class="nav-item nav-link" id="nav-conta-tab" data-toggle="tab" href="#nav-conta" role="tab" aria-controls="nav-conta" aria-selected="false">HASIL KEPUTUSAN</a>
  </div>
</nav>
<div class="tab-content bg-white" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<form method='POST' action='proses.php?kdsk=<?php echo $kdsk?>' >
				
			<table class="table table-bordered kolom">

						<tr bgcolor='#cecece'>
							<td>Nama Kriteria</td>
							<td colspan=2>Nilai Perbandingan</td>
							<td>Nama Kriteria</td>
						</tr>
						<?php	
						// Kriteria
					$q = "SELECT * FROM kriteria where kodesk='$kdsk'  limit 0,1";
					$query = mysqli_query($conn,$q);
					$k1 = mysqli_fetch_row($query);
					
					$qu = "SELECT * FROM kriteria where kodesk='$kdsk'  limit 1,1";
					$quer = mysqli_query($conn,$qu);
					$k2 = mysqli_fetch_row($quer);
				
					$que1 = "SELECT * FROM kriteria where kodesk='$kdsk'  limit 2,1";
					$que = mysqli_query($conn,$que1);
					$k3 = mysqli_fetch_row($que);
					
					$quer = "SELECT * FROM kriteria where kodesk='$kdsk' limit 3,1";
					$qu = mysqli_query($conn,$quer);
					$k4 = mysqli_fetch_row($qu);
					
					//alternatif
					$a = "SELECT * FROM alternatif where kodesk='$kdsk' limit 0,1";
					$b = mysqli_query($conn,$a);
					$a1 = mysqli_fetch_row($b);
					
					$c = "SELECT * FROM alternatif where kodesk='$kdsk' limit 1,1";
					$d = mysqli_query($conn,$c);
					$a2 = mysqli_fetch_row($d);
				
					$e = "SELECT * FROM alternatif where kodesk='$kdsk' limit 2,1";
					$f = mysqli_query($conn,$e);
					$a3 = mysqli_fetch_row($f);
					
					$h = "SELECT * FROM alternatif where kodesk='$kdsk' limit 3,1";
					$i = mysqli_query($conn,$h);
					$a4 = mysqli_fetch_row($i);


					$no=1;
					 ?> 

					<tr>
					<td> <center> <?php echo $k1[2] ?> </center></td>
					
					 <td colspan=2> 
					 <label class="container">9
 					 <input type="radio"  value="9" name="nilaibobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="nilaibobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="nilaibobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="nilaibobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="nilaibobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="nilaibobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="nilaibobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="nilaibobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="nilaibobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $k2[2] ?> </center></td>
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $k1[2] ?> </center></td>
					<input name='kode_k[]' type='hidden' value='<?PHP echo $k1[0] ?>'>
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" checked="checked" value="9" name="nilaibobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="nilaibobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="nilaibobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="nilaibobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="nilaibobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="nilaibobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="nilaibobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="nilaibobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="nilaibobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $k3[2] ?> </center></td>
					
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $k1[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="nilaibobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="nilaibobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="nilaibobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="nilaibobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="nilaibobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="nilaibobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="nilaibobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="nilaibobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="nilaibobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $k4[2] ?> </center></td>
					
					
					</tr>
					<!-- kedua -->
					
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $k2[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="nilaibobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="nilaibobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="nilaibobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="nilaibobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="nilaibobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="nilaibobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="nilaibobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="nilaibobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="nilaibobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $k3[2] ?> </center></td>
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $k2[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="nilaibobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="nilaibobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="nilaibobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="nilaibobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="nilaibobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="nilaibobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="nilaibobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="nilaibobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="nilaibobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $k4[2] ?> </center></td>
					
					
					</tr>
					<?php $no++ ?> <!-- KETIGA -->
					<tr>
					<td> <center> <?php echo $k3[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="nilaibobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="nilaibobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="nilaibobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="nilaibobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="nilaibobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="nilaibobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="nilaibobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="nilaibobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="nilaibobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $k4[2] ?> </center></td>
				
					</tr>
					<input type='hidden' name='no' value='<?php echo $no ?>'>
					
					

</table>

</div><!-- div tab1 -->
<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> 

				<h4 class="kolom"> <?php echo $k1[2] ?> </h4> 
			<table class="table table-bordered kolom">
						<tr bgcolor='#cecece'>
							<td>Nama alternatif</td>
							<td colspan=2>Nilai Perbandingan</td>
							<td>Nama Alternatif</td>

						</tr>
						
					<tr>
						<?php $no=1; ?>
					<td> <center> <?php echo $a1[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio"  value="9" name="bobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot[0]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a2[2] ?> </center></td>
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a1[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" checked="checked" value="9" name="bobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot[1]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a3[2] ?> </center></td>
				
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a1[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot[2]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
					
					
					</tr>
					<!-- kedua -->
					
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a2[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot[3]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a3[2] ?> </center></td>
					
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a2[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot[4]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
				
					
					</tr>
					<?php $no++ ?> <!-- KETIGA -->
					<tr>
					<td> <center> <?php echo $a3[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot[5]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
					
					
					</tr>
					<input type='hidden' name='no' value='<?php echo $no ?>'>
				
					

</table>


 
	

</div><!-- div tab2 -->
<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

				<h4 class="kolom"> <?php echo $k2[2] ?> </h4> 
			<table class="table table-bordered kolom">
						<tr bgcolor='#cecece'>
							<td>Nama alternatif</td>
							<td colspan=2>Nilai Perbandingan</td>
							<td>Nama Alternatif</td>

						</tr>
						
					<tr>
						<?php $no=1; ?>
					<td> <center> <?php echo $a1[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio"  value="9" name="bobot2[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot2[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot2[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot2[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot2[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot2[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot2[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot2[0]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot2[0]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a2[2] ?> </center></td>
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a1[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" checked="checked" value="9" name="bobot2[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot2[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot2[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot2[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot2[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot2[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot2[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot2[1]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot2[1]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a3[2] ?> </center></td>
				
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a1[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot2[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot2[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot2[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot2[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot2[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot2[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot2[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot2[2]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot2[2]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
				
					
					</tr>
					<!-- kedua -->
					
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a2[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot2[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot2[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot2[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot2[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot2[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot2[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot2[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot2[3]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot2[3]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a3[2] ?> </center></td>
			
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a2[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot2[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot2[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot2[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot2[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot2[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot2[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot2[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot2[4]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot2[4]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
				
					
					</tr>
					<?php $no++ ?> <!-- KETIGA -->
					<tr>
					<td> <center> <?php echo $a3[2] ?> </center></td>
		
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot2[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot2[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot2[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot2[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot2[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot2[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot2[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot2[5]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot2[5]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
				
					
					</tr>
					<input type='hidden' name='no' value='<?php echo $no ?>'>
					
					

</table>


</div><!-- div tab3-->
<div class="tab-pane fade" id="nav-profil" role="tabpanel" aria-labelledby="nav-profil-tab"> 

				<h4 class="kolom"> <?php echo $k3[2] ?> </h4> 
			<table class="table table-bordered kolom">
						<tr bgcolor='#cecece'>
							<td>Nama alternatif</td>
							<td colspan=2>Nilai Perbandingan</td>
							<td>Nama Alternatif</td>

						</tr>
						
					<tr>
						<?php $no=1; ?>
					<td> <center> <?php echo $a1[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio"  value="9" name="bobot3[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot3[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot3[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot3[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot3[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot3[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot3[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot3[0]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot3[0]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a2[2] ?> </center></td>
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a1[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" checked="checked" value="9" name="bobot3[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot3[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot3[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot3[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot3[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot3[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot3[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot3[1]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot3[1]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a3[2] ?> </center></td>
				
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a1[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot3[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot3[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot3[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot3[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot3[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot3[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot3[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot3[2]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot3[2]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
					
					
					</tr>
					<!-- kedua -->
					
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a2[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot3[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot3[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot3[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot3[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot3[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot3[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot3[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot3[3]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot3[3]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a3[2] ?> </center></td>
				
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a2[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot3[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot3[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot3[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot3[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot3[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot3[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot3[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot3[4]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot3[4]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
					
					
					</tr>
					<?php $no++ ?> <!-- KETIGA -->
					<tr>
					<td> <center> <?php echo $a3[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot3[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot3[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot3[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot3[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot3[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot3[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot3[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot3[5]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot3[5]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
					
					</tr>
					<input type='hidden' name='no' value='<?php echo $no ?>'>
					
					

</table>


</div><!-- div tab4 -->
<div class="tab-pane fade " id="nav-contac" role="tabpanel" aria-labelledby="nav-contac-tab">

				<h4 class="kolom"> <?php echo $k4[2] ?> </h4> 
			<table class="table table-bordered kolom">
						<tr bgcolor='#cecece'>
							<td>Nama alternatif</td>
							<td colspan=2>Nilai Perbandingan</td>
							<td>Nama Alternatif</td>

						</tr>
						
					<tr>
						<?php $no=1; ?>
					<td> <center> <?php echo $a1[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio"  value="9" name="bobot4[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot4[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot4[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot4[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot4[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot4[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot4[0]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot4[0]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot4[0]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a2[2] ?> </center></td>
				
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a1[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" checked="checked" value="9" name="bobot4[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot4[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot4[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot4[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot4[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot4[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot4[1]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot4[1]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot4[1]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a3[2] ?> </center></td>
				
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a1[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot4[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot4[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot4[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot4[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot4[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot4[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot4[2]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot4[2]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot4[2]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
					
					
					</tr>
					<!-- kedua -->
					
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a2[2] ?> </center></td>
				
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot4[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot4[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot4[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot4[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot4[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot4[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot4[3]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot4[3]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot4[3]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a3[2] ?> </center></td>
				
					
					</tr>
					<?php $no++ ?>
					<tr>
					<td> <center> <?php echo $a2[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot4[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot4[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot4[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot4[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot4[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot4[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot4[4]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot4[4]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot4[4]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
				
					
					</tr>
					<?php $no++ ?> <!-- KETIGA -->
					<tr>
					<td> <center> <?php echo $a3[2] ?> </center></td>
					
					<td colspan=2> 
					 <label class="container">9
 					 <input type="radio" value="9" name="bobot4[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="7" name="bobot4[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="5" name="bobot4[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="3" name="bobot4[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">1
 					 <input type="radio" checked="checked" value="1" name="bobot4[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">3
 					 <input type="radio"  value="0.33" name="bobot4[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">5
 					 <input type="radio"  value="0.2" name="bobot4[5]">
 					 <span class="checkmark"></span>
					 </label>
					 <label class="container">7
 					 <input type="radio"  value="0.14" name="bobot4[5]">
 					 <span class="checkmark"></span>
					 </label>
					<label class="container">9
 					 <input type="radio"  value="0.11" name="bobot4[5]">
 					 <span class="checkmark"></span>
					 </label>
					
						
					</td>
					<td> <center> <?php echo $a4[2] ?> </center></td>
					
					
					</tr>
					<input type='hidden' name='no' value='<?php echo $no ?>'>
				
					<tr><td colspan='5'><button type="submit"  name='simpan' style='float:right'>Submit</button></td></tr>


</table>
</form>

</div><!-- div tab5-->
<div class="tab-pane fade " id="nav-conta" role="tabpanel" aria-labelledby="nav-conta-tab">
<?php
if (isset($_POST['simpan'])){
	$kdsk=$_GET['kdsk'];
$nilaibobot = $_POST['nilaibobot'];
$temp=0;
$no = $_POST['no'];
for ($i=0; $i < $no; $i++) { 
		//echo $nilaibobotkk[$i];
		if ($i==0){
			//echo $nilaibobotkk[$i];
			$bobotkk[0][1]=$nilaibobot[$i];
			$temp = 1/$nilaibobot[$i];
			$bobotkk[1][0]=round($temp,2); ;
			//echo $bobotkk[0][1];
			//echo $bobotkk[1][0];
		}
		elseif($i==1){
			$bobotkk[0][2]=$nilaibobot[$i];
			$temp = 1/$nilaibobot[$i];
			$bobotkk[2][0]=round($temp,2); ;
			//echo $bobotkk[0][2];
			//echo $bobotkk[2][0];

		}
		elseif($i==2){
			$bobotkk[0][3]=$nilaibobot[$i];
			$temp = 1/$nilaibobot[$i];
			$bobotkk[3][0]=round($temp,2); ;
		}
		elseif($i==3){
			$bobotkk[1][2]=$nilaibobot[$i];
			$temp = 1/$nilaibobot[$i];
			$bobotkk[2][1]=round($temp,2); ;
		}
		elseif($i==4){
			$bobotkk[1][3]=$nilaibobot[$i];
			$temp = 1/$nilaibobot[$i];
			$bobotkk[3][1]=round($temp,2); ;
		}
		elseif($i==5){
			$bobotkk[2][3]=$nilaibobot[$i];
			$temp = 1/$nilaibobot[$i];
			$bobotkk[3][2]=round($temp,2); ;
		}
	
	
}
//JUMLAHAN KEBAWAHHHHHHHHHHH
$temp=1+$bobotkk[1][0]+$bobotkk[2][0]+$bobotkk[3][0];
$bobotkk[4][0]=$temp;
//echo $bobotkk[4][0];
$temp=1+$bobotkk[0][1]+$bobotkk[2][1]+$bobotkk[3][1];
$bobotkk[4][1]=$temp;
//echo $bobotkk[4][1];
$temp=1+$bobotkk[0][2]+$bobotkk[1][2]+$bobotkk[3][2];
$bobotkk[4][2]=$temp;
//echo $bobotkk[4][2];
$temp=1+$bobotkk[0][3]+$bobotkk[1][3]+$bobotkk[2][3];
$bobotkk[4][3]=$temp;
//echo $bobotkk[4][3];
//------------------normalisasi---------
$temp=1/$bobotkk[4][0];
$norbb[0][0]=round($temp,2);
//echo $norbb[0][0]; 
$temp=$bobotkk[0][1]/$bobotkk[4][1];
$norbb[0][1]=round($temp,2);
//echo $norbb[0][1];
$temp=$bobotkk[0][2]/$bobotkk[4][2];
$norbb[0][2]=round($temp,2);
//echo $norbb[0][2];
$temp=$bobotkk[0][3]/$bobotkk[4][3];
$norbb[0][3]=round($temp,2);
//echo $norbb[0][3];

$temp=($norbb[0][0]+$norbb[0][1]+$norbb[0][2]+$norbb[0][3])/4; //-------------scoring-----------
$norbb[0][4]=round($temp,2);
//echo $norbb[0][4];
$temp=$bobotkk[1][0]/$bobotkk[4][0];
$norbb[1][0]=round($temp,2);
//echo $norbb[0][0];
$temp=1/$bobotkk[4][1];
$norbb[1][1]=round($temp,2);
//echo $norbb[0][1];
$temp=$bobotkk[1][2]/$bobotkk[4][2];
$norbb[1][2]=round($temp,2);
//echo $norbb[0][2];
$temp=$bobotkk[1][3]/$bobotkk[4][3];
$norbb[1][3]=round($temp,2);
//echo $norbb[0][3];

$temp=($norbb[1][0]+$norbb[1][1]+$norbb[1][2]+$norbb[1][3])/4; //-------------scoring-----------
$norbb[1][4]=round($temp,2);
//echo $norbb[0][4];
$temp=$bobotkk[2][0]/$bobotkk[4][0];
$norbb[2][0]=round($temp,2);
//echo $norbb[0][0]; 
$temp=$bobotkk[2][1]/$bobotkk[4][1];
$norbb[2][1]=round($temp,2);
//echo $norbb[0][1];
$temp=1/$bobotkk[4][2];
$norbb[2][2]=round($temp,2);
//echo $norbb[0][2];
$temp=$bobotkk[2][3]/$bobotkk[4][3];
$norbb[2][3]=round($temp,2);
//echo $norbb[0][3];

$temp=($norbb[2][0]+$norbb[2][1]+$norbb[2][2]+$norbb[2][3])/4; //-------------scoring-----------
$norbb[2][4]=round($temp,2);
//echo $norbb[0][4];
$temp=$bobotkk[3][0]/$bobotkk[4][0];
$norbb[3][0]=round($temp,2);
//echo $norbb[0][0]; 
$temp=$bobotkk[3][1]/$bobotkk[4][1];
$norbb[3][1]=round($temp,2);
//echo $norbb[0][1];
$temp=$bobotkk[3][2]/$bobotkk[4][2];
$norbb[3][2]=round($temp,2);
//echo $norbb[0][2];
$temp=1/$bobotkk[4][3];
$norbb[3][3]=round($temp,2);
//echo $norbb[0][3];

$temp=($norbb[3][0]+$norbb[3][1]+$norbb[3][2]+$norbb[3][3])/4; //-------------scoring-----------
$norbb[3][4]=round($temp,2);
// --KONSISTENSI--
$temp=((1*$norbb[0][4])+($bobotkk[0][1]*$norbb[1][4])+($bobotkk[0][2]*$norbb[2][4])+($bobotkk[0][3]*$norbb[3][4]))/$norbb[0][4];
$konsiskk=round($temp,2);
//echo $konsiskk;
?> 
<h4> Normalisasi : Kriteria </h4>
<table class="table table-bordered kolom">
<tr bgcolor='#cecece'>
	<td>-</td>
	<td><?php echo $k1[2] ?></td>
	<td><?php echo $k2[2] ?></td>
	<td><?php echo $k3[2] ?></td>
	<td><?php echo $k4[2] ?></td>
	<td>Scoring</td>

</tr>
<tr>
	<td><?php echo $k1[2] ?></td>
	<td><?php echo $norbb[0][0] ?></td>
	<td><?php echo $norbb[0][1] ?></td>
	<td><?php echo $norbb[0][2] ?></td>
	<td><?php echo $norbb[0][3] ?></td>
	<td><?php echo $norbb[0][4] ?></td>
</tr>
<tr>
	<td><?php echo $k2[2] ?></td>
	<td><?php echo $norbb[1][0] ?></td>
	<td><?php echo $norbb[1][1] ?></td>
	<td><?php echo $norbb[1][2] ?></td>
	<td><?php echo $norbb[1][3] ?></td>
	<td><?php echo $norbb[1][4] ?></td>
</tr>
<tr>
	<td><?php echo $k3[2] ?></td>
	<td><?php echo $norbb[2][0] ?></td>
	<td><?php echo $norbb[2][1] ?></td>
	<td><?php echo $norbb[2][2] ?></td>
	<td><?php echo $norbb[2][3] ?></td>
	<td><?php echo $norbb[2][4] ?></td>
</tr>
<tr>
	<td><?php echo $k4[2] ?></td>
	<td><?php echo $norbb[3][0] ?></td>
	<td><?php echo $norbb[3][1] ?></td>
	<td><?php echo $norbb[3][2] ?></td>
	<td><?php echo $norbb[3][3] ?></td>
	<td><?php echo $norbb[3][4] ?></td>
</tr>
</table>
<?php
//ak1
$nilaibobotak1 = $_POST['bobot'];
	$temp=0;
	
	for ($i=0; $i < $no; $i++) { 
			//echo $nilaibobotak1kk[$i];
			if ($i==0){
				//echo $nilaibobotak1kk[$i];
				$bobotak1[0][1]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[1][0]=round($temp,2); 
			//	echo $bobotak1[0][1];
				
			//	echo $bobotak1[1][0];
			}
			elseif($i==1){
				$bobotak1[0][2]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[2][0]=round($temp,2); 
				//echo $bobotak1[0][2];
				//echo $bobotak1[2][0];

			}
			elseif($i==2){
				$bobotak1[0][3]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[3][0]=round($temp,2); 
			}
			elseif($i==3){
				$bobotak1[1][2]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[2][1]=round($temp,2); 
			}
			elseif($i==4){
				$bobotak1[1][3]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[3][1]=round($temp,2); 
			}
			elseif($i==5){
				$bobotak1[2][3]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[3][2]=round($temp,2); 
			}
		
		
	}
	//JUMLAHAN KEBAWAHHHHHHHHHHH
	$temp=1+$bobotak1[1][0]+$bobotak1[2][0]+$bobotak1[3][0];
	$bobotak1[4][0]=$temp;
	//echo $bobotak1[4][0];
	$temp=1+$bobotak1[0][1]+$bobotak1[2][1]+$bobotak1[3][1];
	$bobotak1[4][1]=$temp;
	//echo $bobotak1[4][1];
	$temp=1+$bobotak1[0][2]+$bobotak1[1][2]+$bobotak1[3][2];
	$bobotak1[4][2]=$temp;
	//echo $bobotak1[4][2];
	$temp=1+$bobotak1[0][3]+$bobotak1[1][3]+$bobotak1[2][3];
	$bobotak1[4][3]=$temp;
	//echo $bobotak1[4][3];
	//------------------normalisasi---------
	$temp=1/$bobotak1[4][0];
	$normalak1[0][0]=round($temp,2);
	//echo $normalak1[0][0]; 
	$temp=$bobotak1[0][1]/$bobotak1[4][1];
	$normalak1[0][1]=round($temp,2);
	//echo $normalak1[0][1];
	$temp=$bobotak1[0][2]/$bobotak1[4][2];
	$normalak1[0][2]=round($temp,2);
	//echo $normalak1[0][2];
	$temp=$bobotak1[0][3]/$bobotak1[4][3];
	$normalak1[0][3]=round($temp,2);
	//echo $normalak1[0][3];
	
	$temp=($normalak1[0][0]+$normalak1[0][1]+$normalak1[0][2]+$normalak1[0][3])/4; //-------------scoring-----------
	$normalak1[0][4]=round($temp,2);
	//echo $normalak1[0][4];
	$temp=$bobotak1[1][0]/$bobotak1[4][0];
	$normalak1[1][0]=round($temp,2);
	//echo $normalak1[0][0];
	$temp=1/$bobotak1[4][1];
	$normalak1[1][1]=round($temp,2);
	//echo $normalak1[0][1];
	$temp=$bobotak1[1][2]/$bobotak1[4][2];
	$normalak1[1][2]=round($temp,2);
	//echo $normalak1[0][2];
	$temp=$bobotak1[1][3]/$bobotak1[4][3];
	$normalak1[1][3]=round($temp,2);
	//echo $normalak1[0][3];
	
	$temp=($normalak1[1][0]+$normalak1[1][1]+$normalak1[1][2]+$normalak1[1][3])/4; //-------------scoring-----------
	$normalak1[1][4]=round($temp,2);
	//echo $normalak1[0][4];
	$temp=$bobotak1[2][0]/$bobotak1[4][0];
	$normalak1[2][0]=round($temp,2);
	//echo $normalak1[0][0]; 
	$temp=$bobotak1[2][1]/$bobotak1[4][1];
	$normalak1[2][1]=round($temp,2);
	//echo $normalak1[0][1];
	$temp=1/$bobotak1[4][2];
	$normalak1[2][2]=round($temp,2);
	//echo $normalak1[0][2];
	$temp=$bobotak1[2][3]/$bobotak1[4][3];
	$normalak1[2][3]=round($temp,2);
	//echo $normalak1[0][3];
	
	$temp=($normalak1[2][0]+$normalak1[2][1]+$normalak1[2][2]+$normalak1[2][3])/4; //-------------scoring-----------
	$normalak1[2][4]=round($temp,2);
	//echo $normalak1[0][4];
	$temp=$bobotak1[3][0]/$bobotak1[4][0];
	$normalak1[3][0]=round($temp,2);
	//echo $normalak1[0][0]; 
	$temp=$bobotak1[3][1]/$bobotak1[4][1];
	$normalak1[3][1]=round($temp,2);
	//echo $normalak1[0][1];
	$temp=$bobotak1[3][2]/$bobotak1[4][2];
	$normalak1[3][2]=round($temp,2);
	//echo $normalak1[0][2];
	$temp=1/$bobotak1[4][3];
	$normalak1[3][3]=round($temp,2);
	//echo $normalak1[0][3];
	
	$temp=($normalak1[3][0]+$normalak1[3][1]+$normalak1[3][2]+$normalak1[3][3])/4; //-------------scoring-----------
	$normalak1[3][4]=round($temp,2);
	//echo $normalak1[0][4];

// --KONSISTENSI--

	//nampilin table
?>
<h4> Normalisasi : <?php echo $k1[2] ?></h4>

<table class="table table-bordered kolom">
<tr bgcolor='#cecece'>
	<td>-</td>
	<td><?php echo $a1[2] ?></td>
	<td><?php echo $a2[2] ?></td>
	<td><?php echo $a3[2] ?></td>
	<td><?php echo $a4[2] ?></td>
	<td>Scoring</td>

</tr>
<tr>
	<td><?php echo $a1[2] ?></td>
	<td><?php echo $normalak1[0][0] ?></td>
	<td><?php echo $normalak1[0][1] ?></td>
	<td><?php echo $normalak1[0][2] ?></td>
	<td><?php echo $normalak1[0][3] ?></td>
	<td><?php echo $normalak1[0][4] ?></td>
</tr>
<tr>
	<td><?php echo $a2[2] ?></td>
	<td><?php echo $normalak1[1][0] ?></td>
	<td><?php echo $normalak1[1][1] ?></td>
	<td><?php echo $normalak1[1][2] ?></td>
	<td><?php echo $normalak1[1][3] ?></td>
	<td><?php echo $normalak1[1][4] ?></td>
</tr>
<tr>
	<td><?php echo $a3[2] ?></td>
	<td><?php echo $normalak1[2][0] ?></td>
	<td><?php echo $normalak1[2][1] ?></td>
	<td><?php echo $normalak1[2][2] ?></td>
	<td><?php echo $normalak1[2][3] ?></td>
	<td><?php echo $normalak1[2][4] ?></td>
</tr>
<tr>
	<td><?php echo $a4[2] ?></td>
	<td><?php echo $normalak1[3][0] ?></td>
	<td><?php echo $normalak1[3][1] ?></td>
	<td><?php echo $normalak1[3][2] ?></td>
	<td><?php echo $normalak1[3][3] ?></td>
	<td><?php echo $normalak1[3][4] ?></td>
</tr>
</table>

<?php 
//ak2
$nilaibobotak2 = $_POST['bobot2'];
	$temp=0;
	for ($i=0; $i < $no; $i++) { 
			//echo $nilaibobotak2kk[$i];
			if ($i==0){
				//echo $nilaibobotak2kk[$i];
				$bobotak2[0][1]=$nilaibobotak2[$i];
				$temp = 1/$nilaibobotak2[$i];
				$bobotak2[1][0]=round($temp,2); ;
				//echo $bobotak2[0][1];
				//echo $bobotak2[1][0];
			}
			elseif($i==1){
				$bobotak2[0][2]=$nilaibobotak2[$i];
				$temp = 1/$nilaibobotak2[$i];
				$bobotak2[2][0]=round($temp,2); ;
				//echo $bobotak2[0][2];
				//echo $bobotak2[2][0];

			}
			elseif($i==2){
				$bobotak2[0][3]=$nilaibobotak2[$i];
				$temp = 1/$nilaibobotak2[$i];
				$bobotak2[3][0]=round($temp,2); ;
			}
			elseif($i==3){
				$bobotak2[1][2]=$nilaibobotak2[$i];
				$temp = 1/$nilaibobotak2[$i];
				$bobotak2[2][1]=round($temp,2); ;
			}
			elseif($i==4){
				$bobotak2[1][3]=$nilaibobotak2[$i];
				$temp = 1/$nilaibobotak2[$i];
				$bobotak2[3][1]=round($temp,2); ;
			}
			elseif($i==5){
				$bobotak2[2][3]=$nilaibobotak2[$i];
				$temp = 1/$nilaibobotak2[$i];
				$bobotak2[3][2]=round($temp,2); ;
			}
		
		
	}
	//JUMLAHAN KEBAWAHHHHHHHHHHH
	$temp=1+$bobotak2[1][0]+$bobotak2[2][0]+$bobotak2[3][0];
	$bobotak2[4][0]=$temp;
	//echo $bobotak2[4][0];
	$temp=1+$bobotak2[0][1]+$bobotak2[2][1]+$bobotak2[3][1];
	$bobotak2[4][1]=$temp;
	//echo $bobotak2[4][1];
	$temp=1+$bobotak2[0][2]+$bobotak2[1][2]+$bobotak2[3][2];
	$bobotak2[4][2]=$temp;
	//echo $bobotak2[4][2];
	$temp=1+$bobotak2[0][3]+$bobotak2[1][3]+$bobotak2[2][3];
	$bobotak2[4][3]=$temp;
	//echo $bobotak2[4][3];
	//------------------normalisasi---------
	$temp=1/$bobotak2[4][0];
	$norak2[0][0]=round($temp,2);
	//echo $norak2[0][0]; 
	$temp=$bobotak2[0][1]/$bobotak2[4][1];
	$norak2[0][1]=round($temp,2);
	//echo $norak2[0][1];
	$temp=$bobotak2[0][2]/$bobotak2[4][2];
	$norak2[0][2]=round($temp,2);
	//echo $norak2[0][2];
	$temp=$bobotak2[0][3]/$bobotak2[4][3];
	$norak2[0][3]=round($temp,2);
	//echo $norak2[0][3];
	
	$temp=($norak2[0][0]+$norak2[0][1]+$norak2[0][2]+$norak2[0][3])/4; //-------------scoring-----------
	$norak2[0][4]=round($temp,2);
	//echo $norak2[0][4];
	$temp=$bobotak2[1][0]/$bobotak2[4][0];
	$norak2[1][0]=round($temp,2);
	//echo $norak2[0][0];
	$temp=1/$bobotak2[4][1];
	$norak2[1][1]=round($temp,2);
	//echo $norak2[0][1];
	$temp=$bobotak2[1][2]/$bobotak2[4][2];
	$norak2[1][2]=round($temp,2);
	//echo $norak2[0][2];
	$temp=$bobotak2[1][3]/$bobotak2[4][3];
	$norak2[1][3]=round($temp,2);
	//echo $norak2[0][3];
	
	$temp=($norak2[1][0]+$norak2[1][1]+$norak2[1][2]+$norak2[1][3])/4; //-------------scoring-----------
	$norak2[1][4]=round($temp,2);
	//echo $norak2[0][4];
	$temp=$bobotak2[2][0]/$bobotak2[4][0];
	$norak2[2][0]=round($temp,2);
	//echo $norak2[0][0]; 
	$temp=$bobotak2[2][1]/$bobotak2[4][1];
	$norak2[2][1]=round($temp,2);
	//echo $norak2[0][1];
	$temp=1/$bobotak2[4][2];
	$norak2[2][2]=round($temp,2);
	//echo $norak2[0][2];
	$temp=$bobotak2[2][3]/$bobotak2[4][3];
	$norak2[2][3]=round($temp,2);
	//echo $norak2[0][3];
	
	$temp=($norak2[2][0]+$norak2[2][1]+$norak2[2][2]+$norak2[2][3])/4; //-------------scoring-----------
	$norak2[2][4]=round($temp,2);
	//echo $norak2[0][4];
	$temp=$bobotak2[3][0]/$bobotak2[4][0];
	$norak2[3][0]=round($temp,2);
	//echo $norak2[0][0]; 
	$temp=$bobotak2[3][1]/$bobotak2[4][1];
	$norak2[3][1]=round($temp,2);
	//echo $norak2[0][1];
	$temp=$bobotak2[3][2]/$bobotak2[4][2];
	$norak2[3][2]=round($temp,2);
	//echo $norak2[0][2];
	$temp=1/$bobotak2[4][3];
	$norak2[3][3]=round($temp,2);
	//echo $norak2[0][3];
	
	$temp=($norak2[3][0]+$norak2[3][1]+$norak2[3][2]+$norak2[3][3])/4; //-------------scoring-----------
	$norak2[3][4]=round($temp,2);
	//echo $norak2[0][4];

// --KONSISTENSI--
$temp=((1*$norak2[0][4])+($bobotak2[0][1]*$norak2[1][4])+($bobotak2[0][2]*$norak2[2][4])+($bobotak2[0][3]*$norak2[3][4]))/$norak2[0][4];
$konsisak2=round($temp,2);
	//nampilin table
?>
<h4> Normalisasi : <?php echo $k2[2] ?></h4>

<table class="table table-bordered kolom">
<tr bgcolor='#cecece'>
	<td>-</td>
	<td><?php echo $a1[2] ?></td>
	<td><?php echo $a2[2] ?></td>
	<td><?php echo $a3[2] ?></td>
	<td><?php echo $a4[2] ?></td>
	<td>Scoring</td>

</tr>
<tr>
	<td><?php echo $a1[2] ?></td>
	<td><?php echo $norak2[0][0] ?></td>
	<td><?php echo $norak2[0][1] ?></td>
	<td><?php echo $norak2[0][2] ?></td>
	<td><?php echo $norak2[0][3] ?></td>
	<td><?php echo $norak2[0][4] ?></td>
</tr>
<tr>
	<td><?php echo $a2[2] ?></td>
	<td><?php echo $norak2[1][0] ?></td>
	<td><?php echo $norak2[1][1] ?></td>
	<td><?php echo $norak2[1][2] ?></td>
	<td><?php echo $norak2[1][3] ?></td>
	<td><?php echo $norak2[1][4] ?></td>
</tr>
<tr>
	<td><?php echo $a3[2] ?></td>
	<td><?php echo $norak2[2][0] ?></td>
	<td><?php echo $norak2[2][1] ?></td>
	<td><?php echo $norak2[2][2] ?></td>
	<td><?php echo $norak2[2][3] ?></td>
	<td><?php echo $norak2[2][4] ?></td>
</tr>
<tr>
	<td><?php echo $a4[2] ?></td>
	<td><?php echo $norak2[3][0] ?></td>
	<td><?php echo $norak2[3][1] ?></td>
	<td><?php echo $norak2[3][2] ?></td>
	<td><?php echo $norak2[3][3] ?></td>
	<td><?php echo $norak2[3][4] ?></td>
</tr>
</table>
<?php 
//a3
$nilaibobotak3 = $_POST['bobot3'];
	$temp=0;
	for ($i=0; $i < $no; $i++) { 
			//echo $nilaibobotak3kk[$i];
			if ($i==0){
				//echo $nilaibobotak3kk[$i];
				$bobotak3[0][1]=$nilaibobotak3[$i];
				$temp = 1/$nilaibobotak3[$i];
				$bobotak3[1][0]=round($temp,2); ;
				//echo $bobotak3[0][1];
				//echo $bobotak3[1][0];
			}
			elseif($i==1){
				$bobotak3[0][2]=$nilaibobotak3[$i];
				$temp = 1/$nilaibobotak3[$i];
				$bobotak3[2][0]=round($temp,2); ;
				//echo $bobotak3[0][2];
				//echo $bobotak3[2][0];

			}
			elseif($i==2){
				$bobotak3[0][3]=$nilaibobotak3[$i];
				$temp = 1/$nilaibobotak3[$i];
				$bobotak3[3][0]=round($temp,2); ;
			}
			elseif($i==3){
				$bobotak3[1][2]=$nilaibobotak3[$i];
				$temp = 1/$nilaibobotak3[$i];
				$bobotak3[2][1]=round($temp,2); ;
			}
			elseif($i==4){
				$bobotak3[1][3]=$nilaibobotak3[$i];
				$temp = 1/$nilaibobotak3[$i];
				$bobotak3[3][1]=round($temp,2); ;
			}
			elseif($i==5){
				$bobotak3[2][3]=$nilaibobotak3[$i];
				$temp = 1/$nilaibobotak3[$i];
				$bobotak3[3][2]=round($temp,2); ;
			}
		
		
	}
	//JUMLAHAN KEBAWAHHHHHHHHHHH
	$temp=1+$bobotak3[1][0]+$bobotak3[2][0]+$bobotak3[3][0];
	$bobotak3[4][0]=$temp;
	//echo $bobotak3[4][0];
	$temp=1+$bobotak3[0][1]+$bobotak3[2][1]+$bobotak3[3][1];
	$bobotak3[4][1]=$temp;
	//echo $bobotak3[4][1];
	$temp=1+$bobotak3[0][2]+$bobotak3[1][2]+$bobotak3[3][2];
	$bobotak3[4][2]=$temp;
	//echo $bobotak3[4][2];
	$temp=1+$bobotak3[0][3]+$bobotak3[1][3]+$bobotak3[2][3];
	$bobotak3[4][3]=$temp;
	//echo $bobotak3[4][3];
	//------------------normalisasi---------
	$temp=1/$bobotak3[4][0];
	$norak3[0][0]=round($temp,2);
	//echo $norak3[0][0]; 
	$temp=$bobotak3[0][1]/$bobotak3[4][1];
	$norak3[0][1]=round($temp,2);
	//echo $norak3[0][1];
	$temp=$bobotak3[0][2]/$bobotak3[4][2];
	$norak3[0][2]=round($temp,2);
	//echo $norak3[0][2];
	$temp=$bobotak3[0][3]/$bobotak3[4][3];
	$norak3[0][3]=round($temp,2);
	//echo $norak3[0][3];
	
	$temp=($norak3[0][0]+$norak3[0][1]+$norak3[0][2]+$norak3[0][3])/4; //-------------scoring-----------
	$norak3[0][4]=round($temp,2);
	//echo $norak3[0][4];
	$temp=$bobotak3[1][0]/$bobotak3[4][0];
	$norak3[1][0]=round($temp,2);
	//echo $norak3[0][0];
	$temp=1/$bobotak3[4][1];
	$norak3[1][1]=round($temp,2);
	//echo $norak3[0][1];
	$temp=$bobotak3[1][2]/$bobotak3[4][2];
	$norak3[1][2]=round($temp,2);
	//echo $norak3[0][2];
	$temp=$bobotak3[1][3]/$bobotak3[4][3];
	$norak3[1][3]=round($temp,2);
	//echo $norak3[0][3];
	
	$temp=($norak3[1][0]+$norak3[1][1]+$norak3[1][2]+$norak3[1][3])/4; //-------------scoring-----------
	$norak3[1][4]=round($temp,2);
	//echo $norak3[0][4];
	$temp=$bobotak3[2][0]/$bobotak3[4][0];
	$norak3[2][0]=round($temp,2);
	//echo $norak3[0][0]; 
	$temp=$bobotak3[2][1]/$bobotak3[4][1];
	$norak3[2][1]=round($temp,2);
	//echo $norak3[0][1];
	$temp=1/$bobotak3[4][2];
	$norak3[2][2]=round($temp,2);
	//echo $norak3[0][2];
	$temp=$bobotak3[2][3]/$bobotak3[4][3];
	$norak3[2][3]=round($temp,2);
	//echo $norak3[0][3];
	
	$temp=($norak3[2][0]+$norak3[2][1]+$norak3[2][2]+$norak3[2][3])/4; //-------------scoring-----------
	$norak3[2][4]=round($temp,2);
	//echo $norak3[0][4];
	$temp=$bobotak3[3][0]/$bobotak3[4][0];
	$norak3[3][0]=round($temp,2);
	//echo $norak3[0][0]; 
	$temp=$bobotak3[3][1]/$bobotak3[4][1];
	$norak3[3][1]=round($temp,2);
	//echo $norak3[0][1];
	$temp=$bobotak3[3][2]/$bobotak3[4][2];
	$norak3[3][2]=round($temp,2);
	//echo $norak3[0][2];
	$temp=1/$bobotak3[4][3];
	$norak3[3][3]=round($temp,2);
	//echo $norak3[0][3];
	
	$temp=($norak3[3][0]+$norak3[3][1]+$norak3[3][2]+$norak3[3][3])/4; //-------------scoring-----------
	$norak3[3][4]=round($temp,2);
	//echo $norak3[0][4];

// --KONSISTENSI--
$temp=((1*$norak3[0][4])+($bobotak3[0][1]*$norak3[1][4])+($bobotak3[0][2]*$norak3[2][4])+($bobotak3[0][3]*$norak3[3][4]))/$norak3[0][4];
$konsisak3=round($temp,2);
	//nampilin table
?>
<h4> Normalisasi : <?php echo $k3[2] ?></h4>

<table class="table table-bordered kolom">
<tr bgcolor='#cecece'>
	<td>-</td>
	<td><?php echo $a1[2] ?></td>
	<td><?php echo $a2[2] ?></td>
	<td><?php echo $a3[2] ?></td>
	<td><?php echo $a4[2] ?></td>
	<td>Scoring</td>

</tr>
<tr>
	<td><?php echo $a1[2] ?></td>
	<td><?php echo $norak3[0][0] ?></td>
	<td><?php echo $norak3[0][1] ?></td>
	<td><?php echo $norak3[0][2] ?></td>
	<td><?php echo $norak3[0][3] ?></td>
	<td><?php echo $norak3[0][4] ?></td>
</tr>
<tr>
	<td><?php echo $a2[2] ?></td>
	<td><?php echo $norak3[1][0] ?></td>
	<td><?php echo $norak3[1][1] ?></td>
	<td><?php echo $norak3[1][2] ?></td>
	<td><?php echo $norak3[1][3] ?></td>
	<td><?php echo $norak3[1][4] ?></td>
</tr>
<tr>
	<td><?php echo $a3[2] ?></td>
	<td><?php echo $norak3[2][0] ?></td>
	<td><?php echo $norak3[2][1] ?></td>
	<td><?php echo $norak3[2][2] ?></td>
	<td><?php echo $norak3[2][3] ?></td>
	<td><?php echo $norak3[2][4] ?></td>
</tr>
<tr>
	<td><?php echo $a4[2] ?></td>
	<td><?php echo $norak3[3][0] ?></td>
	<td><?php echo $norak3[3][1] ?></td>
	<td><?php echo $norak3[3][2] ?></td>
	<td><?php echo $norak3[3][3] ?></td>
	<td><?php echo $norak3[3][4] ?></td>
</tr>
</table>
<?php 
$nilaibobotak4 = $_POST['bobot4'];
	$temp=0;
	for ($i=0; $i < $no; $i++) { 
			//echo $nilaibobotak4kk[$i];
			if ($i==0){
				//echo $nilaibobotak4kk[$i];
				$bobotak4[0][1]=$nilaibobotak4[$i];
				$temp = 1/$nilaibobotak4[$i];
				$bobotak4[1][0]=round($temp,2); ;
				//echo $bobotak4[0][1];
				//echo $bobotak4[1][0];
			}
			elseif($i==1){
				$bobotak4[0][2]=$nilaibobotak4[$i];
				$temp = 1/$nilaibobotak4[$i];
				$bobotak4[2][0]=round($temp,2); ;
				//echo $bobotak4[0][2];
				//echo $bobotak4[2][0];

			}
			elseif($i==2){
				$bobotak4[0][3]=$nilaibobotak4[$i];
				$temp = 1/$nilaibobotak4[$i];
				$bobotak4[3][0]=round($temp,2); ;
			}
			elseif($i==3){
				$bobotak4[1][2]=$nilaibobotak4[$i];
				$temp = 1/$nilaibobotak4[$i];
				$bobotak4[2][1]=round($temp,2); ;
			}
			elseif($i==4){
				$bobotak4[1][3]=$nilaibobotak4[$i];
				$temp = 1/$nilaibobotak4[$i];
				$bobotak4[3][1]=round($temp,2); ;
			}
			elseif($i==5){
				$bobotak4[2][3]=$nilaibobotak4[$i];
				$temp = 1/$nilaibobotak4[$i];
				$bobotak4[3][2]=round($temp,2); ;
			}
		
		
	}
	//JUMLAHAN KEBAWAHHHHHHHHHHH
	$temp=1+$bobotak4[1][0]+$bobotak4[2][0]+$bobotak4[3][0];
	$bobotak4[4][0]=$temp;
	//echo $bobotak4[4][0];
	$temp=1+$bobotak4[0][1]+$bobotak4[2][1]+$bobotak4[3][1];
	$bobotak4[4][1]=$temp;
	//echo $bobotak4[4][1];
	$temp=1+$bobotak4[0][2]+$bobotak4[1][2]+$bobotak4[3][2];
	$bobotak4[4][2]=$temp;
	//echo $bobotak4[4][2];
	$temp=1+$bobotak4[0][3]+$bobotak4[1][3]+$bobotak4[2][3];
	$bobotak4[4][3]=$temp;
	//echo $bobotak4[4][3];
	//------------------normalisasi---------
	$temp=1/$bobotak4[4][0];
	$norak4[0][0]=round($temp,2);
	//echo $norak4[0][0]; 
	$temp=$bobotak4[0][1]/$bobotak4[4][1];
	$norak4[0][1]=round($temp,2);
	//echo $norak4[0][1];
	$temp=$bobotak4[0][2]/$bobotak4[4][2];
	$norak4[0][2]=round($temp,2);
	//echo $norak4[0][2];
	$temp=$bobotak4[0][3]/$bobotak4[4][3];
	$norak4[0][3]=round($temp,2);
	//echo $norak4[0][3];
	
	$temp=($norak4[0][0]+$norak4[0][1]+$norak4[0][2]+$norak4[0][3])/4; //-------------scoring-----------
	$norak4[0][4]=round($temp,2);
	//echo $norak4[0][4];
	$temp=$bobotak4[1][0]/$bobotak4[4][0];
	$norak4[1][0]=round($temp,2);
	//echo $norak4[0][0];
	$temp=1/$bobotak4[4][1];
	$norak4[1][1]=round($temp,2);
	//echo $norak4[0][1];
	$temp=$bobotak4[1][2]/$bobotak4[4][2];
	$norak4[1][2]=round($temp,2);
	//echo $norak4[0][2];
	$temp=$bobotak4[1][3]/$bobotak4[4][3];
	$norak4[1][3]=round($temp,2);
	//echo $norak4[0][3];
	
	$temp=($norak4[1][0]+$norak4[1][1]+$norak4[1][2]+$norak4[1][3])/4; //-------------scoring-----------
	$norak4[1][4]=round($temp,2);
	//echo $norak4[0][4];
	$temp=$bobotak4[2][0]/$bobotak4[4][0];
	$norak4[2][0]=round($temp,2);
	//echo $norak4[0][0]; 
	$temp=$bobotak4[2][1]/$bobotak4[4][1];
	$norak4[2][1]=round($temp,2);
	//echo $norak4[0][1];
	$temp=1/$bobotak4[4][2];
	$norak4[2][2]=round($temp,2);
	//echo $norak4[0][2];
	$temp=$bobotak4[2][3]/$bobotak4[4][3];
	$norak4[2][3]=round($temp,2);
	//echo $norak4[0][3];
	
	$temp=($norak4[2][0]+$norak4[2][1]+$norak4[2][2]+$norak4[2][3])/4; //-------------scoring-----------
	$norak4[2][4]=round($temp,2);
	//echo $norak4[0][4];
	$temp=$bobotak4[3][0]/$bobotak4[4][0];
	$norak4[3][0]=round($temp,2);
	//echo $norak4[0][0]; 
	$temp=$bobotak4[3][1]/$bobotak4[4][1];
	$norak4[3][1]=round($temp,2);
	//echo $norak4[0][1];
	$temp=$bobotak4[3][2]/$bobotak4[4][2];
	$norak4[3][2]=round($temp,2);
	//echo $norak4[0][2];
	$temp=1/$bobotak4[4][3];
	$norak4[3][3]=round($temp,2);
	//echo $norak4[0][3];
	
	$temp=($norak4[3][0]+$norak4[3][1]+$norak4[3][2]+$norak4[3][3])/4; //-------------scoring-----------
	$norak4[3][4]=round($temp,2);
	//echo $norak4[0][4];

// --KONSISTENSI--
$temp=((1*$norak4[0][4])+($bobotak4[0][1]*$norak4[1][4])+($bobotak4[0][2]*$norak4[2][4])+($bobotak4[0][3]*$norak4[3][4]))/$norak4[0][4];
$konsisak4=round($temp,2);
	//nampilin table
?>
<h4> Normalisasi : <?php echo $k4[2] ?></h4>

<table class="table table-bordered kolom">
<tr bgcolor='#cecece'>
	<td>-</td>
	<td><?php echo $a1[2] ?></td>
	<td><?php echo $a2[2] ?></td>
	<td><?php echo $a3[2] ?></td>
	<td><?php echo $a4[2] ?></td>
	<td>Scoring</td>

</tr>
<tr>
	<td><?php echo $a1[2] ?></td>
	<td><?php echo $norak4[0][0] ?></td>
	<td><?php echo $norak4[0][1] ?></td>
	<td><?php echo $norak4[0][2] ?></td>
	<td><?php echo $norak4[0][3] ?></td>
	<td><?php echo $norak4[0][4] ?></td>
</tr>
<tr>
	<td><?php echo $a2[2] ?></td>
	<td><?php echo $norak4[1][0] ?></td>
	<td><?php echo $norak4[1][1] ?></td>
	<td><?php echo $norak4[1][2] ?></td>
	<td><?php echo $norak4[1][3] ?></td>
	<td><?php echo $norak4[1][4] ?></td>
</tr>
<tr>
	<td><?php echo $a3[2] ?></td>
	<td><?php echo $norak4[2][0] ?></td>
	<td><?php echo $norak4[2][1] ?></td>
	<td><?php echo $norak4[2][2] ?></td>
	<td><?php echo $norak4[2][3] ?></td>
	<td><?php echo $norak4[2][4] ?></td>
</tr>
<tr>
	<td><?php echo $a4[2] ?></td>
	<td><?php echo $norak4[3][0] ?></td>
	<td><?php echo $norak4[3][1] ?></td>
	<td><?php echo $norak4[3][2] ?></td>
	<td><?php echo $norak4[3][3] ?></td>
	<td><?php echo $norak4[3][4] ?></td>
</tr>
</table>
<?php
//konsis bener
$temp=((1*$norbb[0][4])+($bobotkk[0][1]*$norbb[1][4])+($bobotkk[0][2]*$norbb[2][4])+($bobotkk[0][3]*$norbb[3][4]))/$norbb[0][4];
$p1=round($temp,2);
$temp=(($bobotkk[1][0]*$norbb[0][4])+(1*$norbb[1][4])+($bobotkk[1][2]*$norbb[2][4])+($bobotkk[1][3]*$norbb[3][4]))/$norbb[1][4];
$p2=round($temp,2);
$temp=(($bobotkk[2][0]*$norbb[0][4])+($bobotkk[2][1]*$norbb[1][4])+(1*$norbb[2][4])+($bobotkk[2][3]*$norbb[3][4]))/$norbb[2][4];
$p3=round($temp,2);
$temp=(($bobotkk[3][0]*$norbb[0][4])+($bobotkk[3][1]*$norbb[1][4])+($bobotkk[3][2]*$norbb[2][4])+(1*$norbb[3][4]))/$norbb[3][4];
$p4=round($temp,2);
//rata2 konsis
$temp=($p1+$p2+$p3+$p4)/4;
$rata2konsis=round($temp,2);;
//CI
$temp=($rata2konsis-4)/(4-1);
$CI=round($temp,2);;
//CR
$temp=$CI/0.9;
$CR=$temp;
//langkah 4 rank or total score
$temp=($normalak1[0][4]*$norbb[0][4])+($norak2[0][4]*$norbb[1][4])+($norak3[0][4]*$norbb[2][4])+($norak4[0][4]*$norbb[3][4]);
$v1=round($temp,2);
$temp=($normalak1[1][4]*$norbb[0][4])+($norak2[1][4]*$norbb[1][4])+($norak3[1][4]*$norbb[2][4])+($norak4[1][4]*$norbb[3][4]);
$v2=round($temp,2);
$temp=($normalak1[2][4]*$norbb[0][4])+($norak2[2][4]*$norbb[1][4])+($norak3[2][4]*$norbb[2][4])+($norak4[2][4]*$norbb[3][4]);
$v3=round($temp,2);
$temp=($normalak1[3][4]*$norbb[0][4])+($norak2[3][4]*$norbb[1][4])+($norak3[3][4]*$norbb[2][4])+($norak4[3][4]*$norbb[3][4]);
$v4=round($temp,2);
$temp=max($v1,$v2,$v3,$v4);
$max = round($temp,2);
?>
<h4>Konsistensi Kriteria </h4>
<h6>P1 : <small><?php echo $p1;?></small> </h6>
<h6>P2 : <small><?php echo $p2;?></small> </h6>
<h6>P3 : <small><?php echo $p3;?></small> </h6>
<h6>P4 : <small><?php echo $p4;?></small> </h6>
<h6>P rata-rata : <small><?php echo $rata2konsis;?></small> </h6>
<h6>Konsistensi : <small><?php 
if($CR<=0.1){
	echo 'Cukup Konsisten';
}
else {
	echo 'Tidak Konsisten';
}
?></small> </h6>
<h4>Hasil Keputusan </h4>
<h6><?php echo $a1[2];?> : <small><?php echo $v1;?></small> </h6>
<h6><?php echo $a2[2];?> : <small><?php echo $v2;?></small> </h6>
<h6><?php echo $a3[2];?> : <small><?php echo $v3;?></small> </h6>
<h6><?php echo $a4[2];?> : <small><?php echo $v4;?></small> </h6>
<h6>Tertinggi  : <small><?php echo $max;?></small> </h6>
<?php
 }?> </div>
</div> <!-- div tabnav -->
</div>
</div><!--div mid -->

		
	</div>
</body>
</html>