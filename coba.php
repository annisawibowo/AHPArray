<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .container {
    
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

.container:hover input ~ .checkmark {
    background-color: #ccc;
}

.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.container input:checked ~ .checkmark:after {
    display: block;
}

.container .checkmark:after {
     top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
} </style>
</head>
<body>

    <form method='POST' action='#'> 
        <input  name='coba' value='ha'>
        <input  name='cob1' value='hi'>
        <button type='submit'>  submit </button>
    </form>

    <h1>Paket Kursus Dumetschool</h1>
<label class="container">Web Master
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">Graphic Design
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">Web Programming
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">Flash Animation
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
  <?php  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // $coba = array(array($_POST ['coba'],'1'),array($_POST['cob1'],'2'));
    $coba[0][0] = $_POST ['coba'];
    $coba[0][3] = $_POST ['cob1'];
    echo $coba[0][0];
echo $coba[0][2];
//echo $coba[1];
//header("location:output.php?coba=$coba[0]");
    }?>
    
</body>
</html>