<!DOCTYPE html>
<html>
<?php

if (isset($_GET['kdsk']) )
{
	$kdsk=$_GET['kdsk'];
}
else
{
   header("location: index.php");
}

 ?>
<head>
	<title>AHP PROJECT</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body background="img/bgputih.png">
	<div class="wrapper">
		<div class="top"> <img src="img/headernew.png"> </div>
		<div class="mid">
			<div class="note"> HOME PAGE</div>
			<div class="menu">
			<ul>
    <div class="hp"> <a href="index1.php?kdsk=<?php echo $kdsk?>">
            <li>Home Page</li>
        </a> </div>
	<?php	if (isset($_GET['pesan']) )
{

}
else
{ ?><div class="mhs"> <a href="inputmaster.php?kdsk=<?php echo $kdsk?>">
	<li>Alter&Kriteria</li>
</a> </div>
<?php
}?>
    <?php	if (isset($_GET['pesan']) )
{?>
	<div class="pk"> <a href="proses.php?kdsk=<?php echo $kdsk?>">
	<li>Ps. Keputusan</li>
</a> </div><?php
}
else
{ ?>
    <div class="pk"> <a href="#">
            <li>Ps. Keputusan</li>
        </a> </div><?php
}?>

</ul>
			</div>
			<div class="content">
				<img src="img/ahp.png" style="width: 420px; float: left; padding-right: 10px;">

				Analytic Hierarchy Process (AHP) adalah teknik untuk mendukung proses pengambilan keputusan yang
				bertujuan
				untuk menentukan pilihan terbaik dari beberapa alternatif yang dapat diambil. AHP dikembangkan oleh
				Thomas
				L.Saaty pada tahun 1970-an, dan telah mengalami banyak perbaikan dan pengembangan hingga saat ini.
				Kelebihan
				AHP adalah dapat memberikan kerangka yang komprehensif dan rasional dalam menstrukturkan permasalahan
				pengambilan keputusan. AHP merupakan salah satu metode untuk menyelesaikan masalah Multi Criteria
				Decision
				Making (MCDM).
				<br>
				<br>
				Zimmermann (Kusumadewi dkk, 2006:69) mengemukakan bahwa MCMM adalah suatu metode pengambilan keutusan
				untuk
				menetapkan alternatif terbaik dari sejumlah alternatif berdasarkan beberapa kriteria tertentu. Kriteria
				biasanya berupa ukuran-ukuran, aturan-aturan atau standar yang digunakan dalam pengambilan keputusan.
				<br>
				<br>
				Kenapa AHP ? AHP menguraikan masalah multi faktor atau multi kriteria yang kompleks menjadi suatu
				hirarki.
				Menurut Saaty (1993), hirarki didefinisikan sebagai suatu representasi dari sebuah permasalahan yang
				kompleks dalam suatu struktur multi level dimana level pertama adalah tujuan, yang diikuti level faktor,
				kriteria, sub kriteria, dan seterusnya ke bawah hingga level terakhir dari alternatif. Dengan hirarki,
				suatu
				masalah yang kompleks dapat diuraikan ke dalam kelompok-kelompoknya yang kemudian diatur menjadi suatu
				bentuk hirarki sehingga permasalahan akan tampak lebih terstruktur dan sistematis.
			</div>
		</div>
		
	</div>
</body>

</html>