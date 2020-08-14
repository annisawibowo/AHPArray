<?php


if (isset($_POST['simpan'])){
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
echo $konsiskk;
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
<?
//ak1
$nilaibobotak1 = $_POST['bobot'];
	$temp=0;
	for ($i=0; $i < $no; $i++) { 
			//echo $nilaibobotak1kk[$i];
			if ($i==0){
				//echo $nilaibobotak1kk[$i];
				$bobotak1[0][1]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[1][0]=round($temp,2); ;
				//echo $bobotak1[0][1];
				//echo $bobotak1[1][0];
			}
			elseif($i==1){
				$bobotak1[0][2]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[2][0]=round($temp,2); ;
				//echo $bobotak1[0][2];
				//echo $bobotak1[2][0];

			}
			elseif($i==2){
				$bobotak1[0][3]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[3][0]=round($temp,2); ;
			}
			elseif($i==3){
				$bobotak1[1][2]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[2][1]=round($temp,2); ;
			}
			elseif($i==4){
				$bobotak1[1][3]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[3][1]=round($temp,2); ;
			}
			elseif($i==5){
				$bobotak1[2][3]=$nilaibobotak1[$i];
				$temp = 1/$nilaibobotak1[$i];
				$bobotak1[3][2]=round($temp,2); ;
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
	$norak1[0][0]=round($temp,2);
	//echo $norak1[0][0]; 
	$temp=$bobotak1[0][1]/$bobotak1[4][1];
	$norak1[0][1]=round($temp,2);
	//echo $norak1[0][1];
	$temp=$bobotak1[0][2]/$bobotak1[4][2];
	$norak1[0][2]=round($temp,2);
	//echo $norak1[0][2];
	$temp=$bobotak1[0][3]/$bobotak1[4][3];
	$norak1[0][3]=round($temp,2);
	//echo $norak1[0][3];
	
	$temp=($norak1[0][0]+$norak1[0][1]+$norak1[0][2]+$norak1[0][3])/4; //-------------scoring-----------
	$norak1[0][4]=round($temp,2);
	//echo $norak1[0][4];
	$temp=$bobotak1[1][0]/$bobotak1[4][0];
	$norak1[1][0]=round($temp,2);
	//echo $norak1[0][0];
	$norak1[1][1]=round($temp,2);
	//echo $norak1[0][1];
	$temp=$bobotak1[1][2]/$bobotak1[4][2];
	$norak1[1][2]=round($temp,2);
	//echo $norak1[0][2];
	$temp=$bobotak1[1][3]/$bobotak1[4][3];
	$norak1[1][3]=round($temp,2);
	//echo $norak1[0][3];
	
	$temp=($norak1[1][0]+$norak1[1][1]+$norak1[1][2]+$norak1[1][3])/4; //-------------scoring-----------
	$norak1[1][4]=round($temp,2);
	//echo $norak1[0][4];
	$temp=$bobotak1[2][0]/$bobotak1[4][0];
	$norak1[2][0]=round($temp,2);
	//echo $norak1[0][0]; 
	$temp=$bobotak1[2][1]/$bobotak1[4][1];
	$norak1[2][1]=round($temp,2);
	//echo $norak1[0][1];
	$temp=1/$bobotak1[4][2];
	$norak1[2][2]=round($temp,2);
	//echo $norak1[0][2];
	$temp=$bobotak1[2][3]/$bobotak1[4][3];
	$norak1[2][3]=round($temp,2);
	//echo $norak1[0][3];
	
	$temp=($norak1[2][0]+$norak1[2][1]+$norak1[2][2]+$norak1[2][3])/4; //-------------scoring-----------
	$norak1[2][4]=round($temp,2);
	//echo $norak1[0][4];
	$temp=$bobotak1[3][0]/$bobotak1[4][0];
	$norak1[3][0]=round($temp,2);
	//echo $norak1[0][0]; 
	$temp=$bobotak1[3][1]/$bobotak1[4][1];
	$norak1[3][1]=round($temp,2);
	//echo $norak1[0][1];
	$temp=$bobotak1[3][2]/$bobotak1[4][2];
	$norak1[3][2]=round($temp,2);
	//echo $norak1[0][2];
	$temp=1/$bobotak1[4][3];
	$norak1[3][3]=round($temp,2);
	//echo $norak1[0][3];
	
	$temp=($norak1[3][0]+$norak1[3][1]+$norak1[3][2]+$norak1[3][3])/4; //-------------scoring-----------
	$norak1[3][4]=round($temp,2);
	//echo $norak1[0][4];

// --KONSISTENSI--
$temp=((1*$norak1[0][4])+($bobotak1[0][1]*$norak1[1][4])+($bobotak1[0][2]*$norak1[2][4])+($bobotak1[0][3]*$norak1[3][4]))/$norak1[0][4];
$konsisak1=round($temp,2);
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
	<td><?php echo $norak1[0][0] ?></td>
	<td><?php echo $norak1[0][1] ?></td>
	<td><?php echo $norak1[0][2] ?></td>
	<td><?php echo $norak1[0][3] ?></td>
	<td><?php echo $norak1[0][4] ?></td>
</tr>
<tr>
	<td><?php echo $a2[2] ?></td>
	<td><?php echo $norak1[1][0] ?></td>
	<td><?php echo $norak1[1][1] ?></td>
	<td><?php echo $norak1[1][2] ?></td>
	<td><?php echo $norak1[1][3] ?></td>
	<td><?php echo $norak1[1][4] ?></td>
</tr>
<tr>
	<td><?php echo $a3[2] ?></td>
	<td><?php echo $norak1[2][0] ?></td>
	<td><?php echo $norak1[2][1] ?></td>
	<td><?php echo $norak1[2][2] ?></td>
	<td><?php echo $norak1[2][3] ?></td>
	<td><?php echo $norak1[2][4] ?></td>
</tr>
<tr>
	<td><?php echo $a4[2] ?></td>
	<td><?php echo $norak1[3][0] ?></td>
	<td><?php echo $norak1[3][1] ?></td>
	<td><?php echo $norak1[3][2] ?></td>
	<td><?php echo $norak1[3][3] ?></td>
	<td><?php echo $norak1[3][4] ?></td>
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
<?php }?>