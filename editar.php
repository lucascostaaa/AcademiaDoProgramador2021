<?php 
	include "conexao.php";
	$conexao = conectar("localhost","root","","equipamentos");

	if ($_GET['funcao'] == 'editar') {
	
	$id = $_GET['id'];

	$consultaupdate = "SELECT * from ferramentas where idequipamentos = '$id'";

	$con = mysqli_query($conexao,$consultaupdate);

	while($resultado = mysqli_fetch_array($con))
		{
	$idequipamentos = $resultado['idequipamentos'];		
	$nome = $resultado['nome'];
	$preco = $resultado['preco'];
	$numero_serie = $resultado['numero_serie'];
	$data_fabricacao = $resultado['data_fabricacao'];
	$fabricante = $resultado['fabricante'];
	
	}

?>
<h3>Atualizar cadastro</h3> <br><br>
<form action="funcoes.php?funcao=editar&id=<?php echo $id ?>" method="POST">

	
		Nome<input type="text" name="nome" required=""><br><br>

		Preço<input type="text" name="preco" required=""><br><br>

		Número de Serie<input type="text" name="numero_serie" required=""><br><br>

		Data de fabricação<input type="date" name="data_fabricacao" required=""><br><br>

		Fabricante <input type="text" name="fabricante" required=""><br><br>

	<input type="submit" value="Alterar">


</form>

<?php desconectar($conexao); } ?>

