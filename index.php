<html lang="en">
<head><?php
if (isset($_GET['alert']) )
{
    $alert=$_GET['alert'];
if($alert=='aktif'){
	echo '<div class="alert alert-info" role="alert">';
                
                echo "KODE YANG ANDA MASUKKAN SUDAH TERPAKAI!";
                $pesan='terpakai';
                echo '</div>';}
                elseif($alert=='non'){

                    echo '<div class="alert alert-success alert-
                dismissible" role="alert">';
                echo '<button type="button" class="close" data-
                dismiss="alert" aria-label="Close"><span aria-
                hidden="true">&times;</span></button>';
                $pesan='tidak terpakai';
                echo "KODE DAPAT DIPAKAI,SILAHKAN LANJUTKAN!";
                echo '</div>';
                }
}
else
{
  
} ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway"rel="stylesheet">
    <title>Document</title>
    <style> 
    #card {
        background-color: white;

        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
}
body {
       background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
       background-repeat: no-repeat;
}
#card-content {
      padding: 12px 44px;
      
}
#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
}
.underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
}
a {
    text-decoration: none;
}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
#forgot-pass {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 3px;
    text-align: right;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}
#signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
}
    </style>
</head>
<body>
<div id="card">
<div id="card-content">
  <div id="card-title">
    <h2>STUDI KASUS KEPUTUSAN</h2>
    <div class="underline-title"></div>
  </div>

<form method="post" class="form" action='insertawal.php'>
<label for="user-email" style="padding-top:13px">&nbsp;Kode Studi Kasus</label>
  <input
   id="user-email"
   class="form-content"
   type="text"
   name="kdsk"
   autocomplete="on"
   required />
  <div class="form-border"></div>
<label for="user-password" style="padding-top:22px">&nbsp;Nama Studi Kasus</label>
  <input
   id="user-password"
   class="form-content"
   type="text"
   name="namask"
   required />
  <div class="form-border"></div>
  <input id="submit-btn" type="submit" name="submit" value="BUAT" /><a href="#" id="signup">
 <?php 
    if (isset($_GET['kdsk']) )
    {
        $kdsk=$_GET['kdsk'];
        if($pesan=='terpakai'){


            ?> <a href="index1.php?kdsk=<?php echo $kdsk;?>&pesan=<?php echo $pesan?>">Lanjutkan ?</a> <?php
        }
       else {
           
        ?> <a href="index1.php?kdsk=<?php echo $kdsk;?>">Lanjutkan ?</a> <?php
       }
    }
    else
    {
      
    }
 ?>
</form>
   </div>
</div>
    
</body>

</html>