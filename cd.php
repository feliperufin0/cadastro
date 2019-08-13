<?php 
/*
$servername = "localhost";
$username = "root";
$password ="root";
$bd = "estoque_prod";

$con = mysqli_connect($servername, $username, $password, $bd);*/
include 'conec.php';
$nome = $_POST['nomeprod'];
$num = $_POST['numprod'];
$forn = $_POST['forn'];
$categ = $_POST['categ'];

 $sql = "INSERT INTO estoque ( nomeprod , numprod,forn,categ)VALUES('$nome', $num,'$forn','$categ')";
 mysqli_query($con, $sql) ;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sucesso</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container" style="width: 500px;margin-top: 90px;">
		
		<center><h4>Produto cadastrado com sucesso</h4></center>

		
	
	
	<center><a href="adicionar.php" class="btn btn-primary" style="margin-right: 97px;margin-top: 19px;">cadastar outro produto</a></center>
	<center><a href="index.php" class="btn btn-dark" style="margin-right:10px;background-color: #092E12; border-color: #031006 ">Voltar</a></center>

</div>

	
</body>
</html>
