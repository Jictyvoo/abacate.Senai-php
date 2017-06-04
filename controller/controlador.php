<?php
	/*controlador*/

	/*espaco para includes*/
	include_once ("../model/EspecificacoesComodo.php");
	include_once ("../util/VetorLista.php");

	session_start();

	if(isset($_SESSION['VetorLista']) == false)
		$_SESSION['VetorLista'] = new VetorLista();

	if(!isset($_SESSION['paginaOrigem']))
		$_SESSION['paginaOrigem'] = "";
	
	if($_SESSION['paginaOrigem'] == "../view/resultPage.php"){
		session_destroy();
		session_start();
		$_SESSION['mensagemErro'] = "Dados Deletados com Sucesso!";
		header('Location: ../view/resultPage.php');	
	}

	else{

		if(!is_numeric(htmlspecialchars($_POST['area'])))
			unset($_SESSION['areaPrevia']);
		else
			$_SESSION['areaPrevia'] = htmlspecialchars($_POST['area']);
		if(!is_numeric(htmlspecialchars($_POST['perimetro'])))
			unset($_SESSION['perimetroPrevio']);
		else
			$_SESSION['perimetroPrevio'] = htmlspecialchars($_POST['perimetro']);
		$_SESSION['previoIdComodo'] = htmlspecialchars($_POST['comodosId']);


		$testaAcao = htmlspecialchars($_POST['acaoRealizada']);

		include_once("tratamentosErro.php");
		verificaErros($testaAcao);

		include_once("analiseDados.php");
		/*if(!isset($_SESSION['mensagemErro']))
			*/verificaAcao($testaAcao);
	}
?>
