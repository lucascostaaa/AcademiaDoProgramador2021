<?php
	include "conexao.php";

	// DADOS DAS TABELA FERRAMENTAS

	$gravarnome = $_POST['nome'];
	$gravarpreco = $_POST['preco'];
	$gravarnumero_serie = $_POST['numero_serie'];
	$gravardata_fabricacao = $_POST["data_fabricacao"];
	$gravarfabricante = $_POST['fabricante'];

	// DADOS DA TABELA CHAMADAS

	$gravartitulo_chamado = $_POST['titulo_chamado'];
	$gravardescricao = $_POST['descricao'];
	$gravardata_abertura = $_POST['data_abertura']; 
	
	
	// TODO O CONTEUDO DA APLICAÇÃO SERA ARMAZENADO NO PHPMYADMIN

	$conexao = mysqli_connect("localhost","root","","equipamentos");

	// INSERINDO OS EQUIPAMENTOS NO BANCO DE DADOS 

	$consulta = "INSERT INTO ferramentas(nome,preco,numero_serie,data_fabricacao,fabricante) values('$gravarnome','$gravarpreco','$gravarnumero_serie','$gravardata_fabricacao','$gravarfabricante')";

	// INSERINDO OS CHAMADOS NO BANCO DE DADOS

    $consulta = "INSERT INTO chamados(titulo_chamado,descricao,data_abertura) value ('$gravartitulo_chamado','$gravardescricao','$gravardata_abertura')";

	if($_GET['funcao'] == 'gravar'){

			$sqlgravar = mysqli_query($conexao,$consulta);
			header("Location:formulario.php");
	}

	if($_GET['funcao'] == 'editar'){
	$id = $_GET['id'];

	// EDITANDO AS FERRAMENTAS NO BANCO DE DADOS

	$consulta = "UPDATE ferramentas set nome = '$gravarnome', preco = '$gravarpreco', numero_serie = '$gravarnumero_serie', data_fabricacao = '$gravardata_fabricacao', fabricante = '$gravarfabricante' where idequipamentos = '$id'";

	// EDITANDO AS CHAMADAS NO BANCO DE DADOS

	$consulta = "UPDATE chamados set titulo_chamado = '$gravartitulo_chamado', descricao = '$gravardescricao', data_abertura = '$gravardata_abertura' where idchamados = '$id'";
	
	$sqlalterar = mysqli_query($conexao,$consulta);
	header("location:index.php");
	}
	if ($_GET['funcao']=='excluir') {
		$id= $_GET['id'];

	// DELETANDO AS INSERÇÕES DA TABELA FERRAMENTAS 

		$consulta="DELETE from ferramentas where idequipamentos='$id'";
	
	// DELETANDO AS INSERÇÕES DA TABELA CHAMADOS

		$consulta="DELETE from chamados where idchamados='$id'";

		$sqlexcluir= mysqli_query($conexao,$consulta);
	 
	 header("Location: visualizar.php");
	 
	 }

?>