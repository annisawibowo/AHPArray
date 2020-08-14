<?php 
include 'koneksi.php';
$kodesk=$_GET['kdsk'];
?>
<ul>
    <div class="hp"> <a href="index1.php?kodesk=<?php echo $kdsk?>">
            <li>Home Page</li>
        </a> </div>
   
    <div class="mhs"> <a href="inputmaster.php?kodesk=<?php echo $kdsk?>">
            <li>Alter&Kriteria</li>
        </a> </div>
    <div class="pk"> <a href="proses.php?kodesk=<?php echo $kdsk?>">
            <li>Ps. Keputusan</li>
        </a> </div>

</ul>