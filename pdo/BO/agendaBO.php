<?php
	include '../DAO/agendaDAO.php';

	function logarBO($usuario,$senha){
		return logarDAO($usuario, $senha);
	}
	
	function consultarTodosRegistrosBO() {
		return consultarTodosRegistrosDAO();
	}
	function inserirBO($brinde, $fornecedor, $emailfornecedor, $data) {
		return inserirDAO($brinde, $fornecedor, $emailfornecedor, $data);		
	}
	function atualizarRegistroBO($idbrinde, $brinde, $fornecedor, $emailfornecedor, $data) {
		return atualizarRegistroDAO($idbrinde, $brinde, $fornecedor, $emailfornecedor, $data);
	}
	function excluirRegistrosPorIDBO($idbrinde) {
		return excluirRegistrosPorIDDAO($idbrinde);
		
	}
?>