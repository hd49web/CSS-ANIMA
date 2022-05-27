<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<h1>TESTE DE SOMA </h1>

<form action="calculos.php" method="POST">
 
<label >01</label>
<input type="text" name="num1"/><br><br>
<label >02</label>
<input type="text" name="num2"/><br><br>
<label >03</label>
<input type="text" name="num3"/><br><br>
<label >04</label>
<input type="text" name="num4"/><br><br>
<label >TOTAL</label>
<input type="submit" value="soma"/>
 
</form>


<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$num4 = $_POST["num4"];
$resultado = $num1+$num2+$num3+$num4;
echo $resultado;
?>
</body>
</html>