<!DOCTYPE html>
<html>
<head>
	<title>Lista de produtos</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="style.css">
  
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
	
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="conatiner" style="width: 700px;margin-top: 70px;font-family: 'Oswald'">
	<H3 >Lista de produtos</H3>
<table class="table table-striped" style="margin-top: 40px;font-family:'roboto Condensed' ">
  <thead>
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Produto</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>

  <tr>
  	<?php 
  	include 'conec.php';
  	$sql = "SELECT * FROM estoque ";
  	$busca = mysqli_query($con , $sql);

  	while ($array= mysqli_fetch_array($busca)) {
  		//$id_estoque = $array['id-estoque'];
  		$nome = $array['nomeprod'];
  		$num = $array['numprod'];
  		$forn = $array['forn'];
  		$categ = $array['categ'];

    
  ?>

  <tr>

        <td><?php echo $num ?></td>

        <td><?php echo $nome ?></td>

        <td><?php echo $forn ?></td>

        <td><?php echo $categ ?></td>

    </tr>

  <?php }?>

</table>

</div>




<!-- ------------------SCRIPTS BOOTSTRAP----------------------- >
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
