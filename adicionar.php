<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Castro de produtos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
	
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  
<div class=" base">
 <h4>Cadastro de produtos</h4>
	<form action="cd.php" method="post">
  		
  		<div class="form-group">
    <label >Nome do produto: </label>
    <input type="text" class="form-control"   placeholder="Insira o nome do produto " required="" name="nomeprod">
    
 		</div>
  			
  			<div class="form-group">
    <label >Número do produto: </label>
    <input type="number" class="form-control" name="numprod" required="" placeholder="Insira o número do produto">
  			
  			</div>
	
    <div class="form-group">
      <label>Fornecedor:</label>
            
        <select class="form-control" name="forn">           
            <option>W&C</option>
            <option>WINDSTAR</option>
            <option>ZE DA BODEGA</option>
        </select>

    </div>

    <div class="form-group">
      <label>Categoria:</label>
            
        <select class="form-control" name="categ">           
            <option>Hardware</option>
            <option>Software</option>
            <option>Periféricos</option>
        </select>

    </div>
    <button type="submit" class="btn btn-success">Cadastar</button>
     <a href="index.php" class="btn btn-dark" style="margin-right:10px;background-color: #092E12; border-color: #031006 ">Voltar</a>

  </form> 
</div>




<!-- ------------------SCRIPTS BOOTSTRAP----------------------- >
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>