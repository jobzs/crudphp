<?php
	include '../Util/conexaoBD.php';


	function logarDAO($usuario, $senha){
		
		$bancoDeDados = conectar();

		try{

			$verificar = $bancoDeDados->prepare("select * from usuario where usuario = ? and senha = ?");
			$verificar->bindValue(1, $usuario);
			$verificar->bindValue(2, $senha);
			$verificar->execute();

			if ($verificar->rowCount() == 1) {
					$list = $bancoDeDados->query("select * from usuario where usuario = '$usuario' and senha = '$senha'");
					$list->execute();
					while ($registro = $list->fetch(PDO::FETCH_OBJ)) {
						$_SESSION["idusuario"] = $registro->idusuario;
						$_SESSION["nome"] = $registro->nome;
						$_SESSION["sobrenome"] = $registro->sobrenome;
						$_SESSION["usuario"] = $registro->usuario;

						}

						echo "<script> alert('Login Efetuado'); </script>";
						echo '<meta http-equiv = refresh content= "0; url = ../Paginas/principal.php">';
					
					
				}
				else {
					echo "<script> alert('Insira a senha correta'); </script>";
					echo "<script> window.history.back() </script>";
				}
			}
		
		catch(Exception $e){
			echo "Erro agendaDAO: " . $e;

		}
	}

	function consultarTodosRegistrosDAO() {
		
		$bancoDeDados = conectar();
		
		try {
			$consulta = "select * from brinde";
			
			//QUERY utiliza-se apenas para consulta
			return $bancoDeDados->query($consulta);
			
		} catch (Exception $e) {
			echo "Erro consultarTodosRegistrosDAO: " . $e->getMessage();
		}
	}

function inserirDAO($brinde, $fornecedor, $emailfornecedor, $data) {
	
		$bancoDeDados = conectar();
		
		try {
			
			$consulta = "insert into brinde(brinde, fornecedor, emailfornecedor, data) values ('$brinde','$fornecedor', '$emailfornecedor','$data')";
			echo "<script> alert('Inserido com Sucesso'); </script>";

			//EXEC utiliza-se para insercao, atualizacao e exclusao
			return $bancoDeDados->exec($consulta);
			
		} catch (Exception $e) {
			echo "Erro agendaDAO: " . $e;
		}
		
	}

function atualizarRegistroDAO($idbrinde, $brinde, $fornecedor, $emailfornecedor, $data) {
		$bancoDeDados = conectar();
		try {
			$sql = "update brinde set brinde = '$brinde', fornecedor = '$fornecedor', emailfornecedor = '$emailfornecedor', data = '$data' where idbrinde = '$idbrinde'";
		
			return $bancoDeDados->exec($sql);
		
		} catch (Exception $e) {
			echo "Erro consultarRegistrosPorIDDAO: " . $e->getMessage();
		}
	}

function excluirRegistrosPorIDDAO($idbrinde) {
		$bancoDeDados = conectar();
		
		try {
			$sql = "delete from brinde where idbrinde = $idbrinde";
		
			return $bancoDeDados->exec($sql);
		
		} catch (Exception $e) {
			echo "Erro consultarRegistrosPorIDDAO: " . $e->getMessage();
		}
	}
	


?>