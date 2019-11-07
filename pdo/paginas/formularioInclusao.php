<?php 
session_start();

if (!isset($_SESSION["idusuario"])) {
   echo "<script> alert('Acesso negado'); 
            window.location = '../index.php';
          </script>";
}

 ?>
 
<html>

	<head>
		<title>Formulário de inclusão de controle de Brindes</title>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<meta charset="UTF-8"/>	
		<style>
      .card {
        width: 500px;
        margin: 0 auto;
        position: center;
      }
    </style>
	</head>


	<body>
		<div class="mt-5 container">
				<h3>Formulário de inserção de Brindes para Doação</h3>
		<form action="../Forms/todososforms.php" method="POST">

				  <div class="form-group">
				    <label>Brinde</label>
				    <input type="text" class="form-control" name='brinde'>
				  </div>
				  <div class="form-group">
				    <label>Fornecedor</label>
				    <input type="text" class="form-control" name='fornecedor'>
				  </div>
				  <div class="form-group">
				    <label>Email</label>
				    <input type="text" class="form-control" name='emailfornecedor'>
				  </div>
				  <div class="form-group">
				    <label>Data</label>
				    <input type="date" class="form-control" name='data'>
				  </div>
				  <input type="hidden" name="idusuario" value="<?php echo $_SESSION['idusuario']; ?>">
				  
				  <button type="submit" class="btn btn-lg btn-info btn-block" value="Inserir" name="acao">Inserir</button>
		</form>
	<a href="../paginas/principal.php" class="btn btn-lg btn-info btn-block">Voltar para a página principal</a>
</div>
	</body>
</html>
