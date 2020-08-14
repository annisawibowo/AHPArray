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