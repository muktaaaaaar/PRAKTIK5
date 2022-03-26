<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style = "background-color: lightblue;">

  <h3 style = "color:red">Form perhitungan persegi panjang</h3>

<form class="col-md-4 mt-4" action="hasil.php" method="POST">
  <div class="form-group row">
    <label for="panjang" class="col-4 col-form-label">Panjang</label> 
    <div class="col-8">
      <input id="panjang" name="panjang" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="lebar" class="col-4 col-form-label">Lebar</label> 
    <div class="col-8">
      <input id="lebar" name="lebar" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
require_once 'persegi_panjang.php';
$LuasPersegi = new PersegiPanjang($_POST['panjang'], $_POST['lebar']);
echo "Hasilnya adalah";
echo "<br>";
echo 'Luas Persegi Panjang : '. $LuasPersegi->luasp();
echo "<br>";
echo 'Keliling Persegi Panjang : '. $LuasPersegi->kelilingp();
?>
</body>
</html>