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
		<meta charset="utf-8" />
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
	
			<h1 class="container text-center mt-5">Consulta, Alteração e Exclusão de Brindes</h1>
				<table class="table table-striped table-bordered table-hover container table-resposive">
				
					<thead>
	                    <tr>
	                      <th>Id Brinde</th>
	                      <th>Brinde</th>
	                      <th>Fornecedor</th>
	                      <th>Email do Fornecedor</th>
	                      <th>Data de Entrega</th>
	                    </tr>
                  	</thead>
                  	
	                  
					<tbody>
                  		<?php 
							include '../BO/agendaBO.php';
							$resultado = consultarTodosRegistrosBO();
								
							if($resultado->rowCount() > 0)
							{
								while($registro = $resultado->fetch(PDO::FETCH_OBJ)) //http://php.net/manual/en/pdostatement.fetch.php
								{
									#Se clicou no botao atualizar, entao renderizar esta linha com inputtext para edicao
									if(isset($_GET['idParaAtualizar']) && $_GET['idParaAtualizar'] == $registro->idbrinde) {
										echo "<tr>
	                      		 		
	                      				<form action=\"#\" method=\"GET\">
        								
                  						<td>" . $_GET['idParaAtualizar'] . 
                  						"<input type=\"hidden\" name=\"idbrinde\" value=" . $_GET['idParaAtualizar'] . "> </td>
										
                  						<td><input type=\"text\" name=\"brinde\" value=\"" . $_GET['brinde'] . "\"> </td>
										<td><input type=\'text\' name=\"fornecedor\" value=\"" . $_GET['fornecedor'] . " \" \> </td>
										<td><input type=\"text\" name=\"emailfornecedor\" value=\"" . $_GET['emailfornecedor'] . "\"> </td>
										<td><input type=\"date\" name=\"data\" value=\"" . $_GET['data'] . "\"> </td>
										
										
										<td><input type=\"submit\" value=\"Atualizar\" name=\"acao\" class=\"btn btn-success\">
										
										<a href=\"formularioAtualizarEExcluir2.php?idParaExcluir=$registro->idbrinde\" class=\"btn btn-danger\">
										<span class=\"glyphicon glyphicon-remove\"></span>
										Excluir
										</a>

										</td> 
										
										</form>
										
										</tr>";
									} else {
										echo '<tr>';
										echo "<td> $registro->idbrinde </td>";
										echo "<td> $registro->brinde </td>";
										echo "<td> $registro->fornecedor </td>";
										echo "<td> $registro->emailfornecedor </td>";
										echo "<td> $registro->data </td>";
										//Adicionando os dois botoes: Editar e Excluir
										echo "<td class=\"bg-white\">
										<a href=\"formularioAtualizarEExcluir2.php?idParaAtualizar=$registro->idbrinde&brinde=$registro->brinde&fornecedor=$registro->fornecedor&emailfornecedor=$registro->emailfornecedor&data=$registro->data\" class=\"btn btn-success\">
										<span class=\"glyphicon glyphicon-edit\"></span>
										Editar
										</a>
											
										<a href=\"formularioAtualizarEExcluir2.php?idParaExcluir=$registro->idbrinde\" class=\"btn btn-danger\">
										<span class=\"glyphicon glyphicon-remove\"></span>
										Excluir
										</a>
											
											
										</td>";
											
										echo '</tr>';
									}
									
								
								}
									
							} else {
								echo '<tr>';
								echo '<td> Não há registros no banco</td>';
								echo '<td> Não há registros no banco</td>';
								echo '<td> Não há registros no banco</td>';
								echo '<td> Não há registros no banco</td>';								
								echo '<td> Não há registros no banco</td>';
								echo '</tr>';
							}
							
							
						?>
                	</tbody>
	            </table>
		
		<a href="../Paginas/principal.php" class="container btn btn-lg btn-info btn-block">Voltar para a página principal</a>
		
			<?php 
				if(isset($_GET['acao']) && $_GET['acao'] == 'Atualizar') {
					atualizarRegistroBO($_GET['idbrinde'], $_GET['brinde'], $_GET['fornecedor'], $_GET['emailfornecedor'], $_GET['data']);
					header('Location:../Paginas/formularioAtualizarEExcluir2.php');
				}
				
				if(isset($_GET['idParaExcluir'])) {
					excluirRegistrosPorIDBO($_GET['idParaExcluir']);
					header('Location:../Paginas/formularioAtualizarEExcluir2.php');
				}
				
			?>
			

		
		
		



	</body>
</html>
