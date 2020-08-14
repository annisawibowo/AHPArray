<!DOCTYPE html>
<html>
<head>
<?php  include 'koneksi.php';
if (isset($_GET['kdsk']) )
{
	$kdsk=$_GET['kdsk'];
}
else
{
   header("location: index.php");
}
include 'boothstrap.html';?>
	<title>AHP PROJECT</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="img/bgputih.png">
	<div class="wrapper">
		<div class="top"> <img src="img/headernew.png">  </div>
		<div class="mid">
			<div class="note">ALTERNATIF</div>
			<div class="menu">
			<ul>
    <div class="hp"> <a href="index1.php?kdsk=<?php echo $kdsk?>">
            <li>Home Page</li>
        </a> </div>
   
    <div class="mhs"> <a href="inputmaster.php?kdsk=<?php echo $kdsk?>">
            <li>Alter&Kriteria</li>
        </a> </div>
    <div class="pk"> <a href="#">
            <li>Ps. Keputusan</li>
        </a> </div>

</ul>
			</div>
			<div class="content">
			<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Alternatif</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Kriteria</a>
    
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<table class="table table-bordered">
						<tr bgcolor='#cecece'>
						<th >  No </th>
						<th> ID Alternatif </th>
						<th> Nama Alternatif </th>
						</tr>
						<form method='POST' action='insertalter.php?'>
							<input type='hidden' name='kdsk' value ='<?php echo $kdsk?>'>
						<?php $no=1;
						
						?>			
										<tr>
										
											<td> <center> <?php echo $no; ?> </center> </td>
											<td><input name='kode_alter[]' style='font-upper' class ='kolom' placeholder="angka" type='text'> </td>
											<td> <input name='nama_alter[]'class ='kolom' type='text'> </td>
											

										</tr>
										<?php $no++;?>	
                                	<tr>
									<td> <center> <?php echo $no; ?> </center> </td>
											<td><input name='kode_alter[]' style='font-upper' class ='kolom' placeholder="angka" type='text'> </td>
											<td> <input name='nama_alter[]'class ='kolom' type='text'> </td>
											
										</tr>
										<?php $no++;?>	
                                	<tr>
									<td> <center> <?php echo $no; ?> </center> </td>
											<td><input name='kode_alter[]' style='font-upper' class ='kolom'placeholder="angka" type='text'> </td>
											<td> <input name='nama_alter[]'class ='kolom' type='text'> </td>
											
										</tr>
										<?php $no++;?>
                                	<tr>
									<td> <center> <?php echo $no; ?> </center> </td>
											<td><input name='kode_alter[]' style='font-upper' class ='kolom'placeholder="angka" type='text'> </td>
											<td> <input name='nama_alter[]'class ='kolom' type='text'> </td>
											<input type='hidden' name='no' value='<?php echo $no ?>'>
										</tr>
								
								<tr><td colspan='5'><button type="submit" style='float:right'>Submit</button></td></tr>
						
						</form>
					</table>
</div> <!-- div konten1-->
<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
<table class="table table-bordered">
						<tr bgcolor='#cecece'>
						<th >  No </th>
						<th> ID Kriteria </th>
						<th> Nama Nama Kriteria </th>
						</tr>
						<form method='POST' action='insertkriteria.php?'>
						<input type='hidden' name='kdsk' value ='<?php echo $kdsk?>'>
						<?php $no=1;
						
						?>			
										<tr>
										
											<td> <center> <?php echo $no; ?> </center> </td>
											<td><input name='kode_k[]' style='font-upper' class ='kolom' placeholder="angka" type='text'> </td>
											<td> <input name='nama_k[]'class ='kolom' type='text'> </td>
											

										</tr>
										<?php $no++;?>	
                                	<tr>
									<td> <center> <?php echo $no; ?> </center> </td>
											<td><input name='kode_k[]' style='font-upper' class ='kolom' placeholder="angka" type='text'> </td>
											<td> <input name='nama_k[]'class ='kolom' type='text'> </td>
											
										</tr>
										<?php $no++;?>	
                                	<tr>
									<td> <center> <?php echo $no; ?> </center> </td>
											<td><input name='kode_k[]' style='font-upper' class ='kolom'placeholder="angka" type='text'> </td>
											<td> <input name='nama_k[]'class ='kolom' type='text'> </td>
											
										</tr>
										<?php $no++;?>
                                	<tr>
									<td> <center> <?php echo $no; ?> </center> </td>
											<td><input name='kode_k[]' style='font-upper' class ='kolom'placeholder="angka" type='text'> </td>
											<td> <input name='nama_k[]'class ='kolom' type='text'> </td>
											<input type='hidden' name='no' value='<?php echo $no ?>'>
										</tr>
								
								<tr><td colspan='5'><button type="submit" style='float:right'>Submit</button></td></tr>
						
						</form>
					</table>

</div> <!-- DIV konten2 -->
					</div> <!--div tab konten-->
					
			</div>
		</div>
		
	</div>
</body>
</html>