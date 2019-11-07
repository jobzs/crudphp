<?php

	include '../BO/agendaBO.php';

	if($_POST["acao"] == "login"){
		
		if(!empty($_POST["usuario"]) && !empty($_POST["senha"])){

			$usuario = $_POST["usuario"];
			$senha = $_POST["senha"];

			session_start();
			logarBO($usuario, $senha);

						
		} 
		else {
			echo "<script> alert('preencha todos os campos'); </script>";
			echo "<script> window.history.back() </script>";
		}
		
	}

	if ($_POST["acao"] == "logout") {
		session_start();
				unset($_SESSION["idusuario"]);
				unset($_SESSION["nome"]);
				unset($_SESSION["sobrenome"]);	
				unset($_SESSION["usuario"]);
		session_destroy();

		echo "<script> alert('Deslogado'); </script>";
		echo '<meta http-equiv = refresh content= "0; url = ../index.php">';

	}
	
if($_POST["acao"] == "Inserir") {
		
		if(!empty($_POST["brinde"]) && !empty($_POST["fornecedor"]) && !empty($_POST["emailfornecedor"]) && !empty($_POST["data"])){
			$brinde = $_POST["brinde"];
			$fornecedor = $_POST["fornecedor"];
			$emailfornecedor = $_POST["emailfornecedor"];
			$data = $_POST["data"];
			inserirBO($brinde, $fornecedor, $emailfornecedor, $data);
			
			echo '<meta http-equiv = refresh content= "0; url = ../Paginas/principal.php">';
			
		} else {
			echo "<script> window.alert(\"Você deve preencher todos os campos\") </script>";
			echo "<script> window.history.back(); </script>";
		}
		
	}

?>
