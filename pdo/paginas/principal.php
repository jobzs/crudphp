<?php 
session_start();

if (!isset($_SESSION["idusuario"])) {
   echo "<script> alert('Acesso negado'); 
            window.location = '../index.php';
          </script>";
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagina Principal</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
	<nav class="navbar navbar-dark bg-success">
		<a class="navbar-brand" href="#">
			Doação de Brinde
		</a>
	</nav>
    <div class="container">    
      <div class="row">      
        <div class="mx-auto my-auto p-3">
          <div class="card">
            <div class="text-info text-center m-3">Bem-Vindo <?php print_r($_SESSION["nome"]); ?> <?php print_r($_SESSION["sobrenome"]);?>!</div>
            <div class="card-header">
              Controle de Doação de Brindes
            </div>
            <div class="card-body">
              <div class="list-group-item"><a href="../Paginas/formularioInclusao.php">Incluir Brindes para Doação</a></div>
                  <div class="list-group-item"><a href="../Paginas/formularioAtualizarEExcluir2.php">Consultar, Alterar e Excluir</a></div>
                  <div class="list-group-item">
                    <form action='../Forms/todososforms.php' method='POST'>
                    <button name='acao' value='logout' class="btn btn-lg btn-success btn-block">Logout</button>
                    </form>
                  </div>
                </div>           
            </div>
          </div>
        </div>
    </div>



    
               
</body>
</html>
