<?php 
	include "conexao.php";
	$conexao = conectar("localhost","root","","equipamentos");

	if ($_GET['funcao'] == 'editar') {
	
	$id = $_GET['id'];

	$consultaupdate = "SELECT * from chamados where idchamados = '$id'";

	$con = mysqli_query($conexao,$consultaupdate);

	while($resultado = mysqli_fetch_array($con))
		{

	$idchamados = $resultado['idchamados'];		
	$titulo_chamado = $resultado['titulo_chamado'];
	$descricao = $resultado['descricao'];
	$data_fabricacao = $resultado['data_abertura'];
	



	}

?>
<h3>Atualizar cadastro</h3> <br><br>
<form action="funcoes.php?funcao=editar&id=<?php echo $id ?>" method="POST">

	
		Titulo do chamado <input type="text" name="titulo_chamado" required=""><br><br>

		Descrição<input type="text" name="descricao" required=""><br><br>

		Data de abertura<input type="date" name="data_fabricacao" required=""><br><br>


	<input type="submit" value="Alterar">


</form>

<?php desconectar($conexao); } ?>

