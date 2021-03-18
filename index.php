<?php
include "conexao.php";
$conexao = conectar("localhost","root","","equipamentos");
header('content-type: text/html; charset=ISO-8859-1');
$consulta = "select * from ferramentas";
$con = mysqli_query($conexao,$consulta);
?>

<!-- TELA COM AS FERRAMENTAS CADASTRADAS NO BANCO !-->

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>

	<!-- CHAMANDO O CSS !-->
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- PARTE SUPERIOR DA TABELA! -->

	<h3> Buscando dados </h3><br><br>
	<table border="1">
		<tr>
			<td><center><b>idequipamentos</b></center>
			<td><center><b>nome</b></center>
			<td><center><b>preco</b></center>
		    <td><center><b>numero_serie</b></center>
		    <td><center><b>data_fabricacao</b></center>
		    <td><center><b>fabricante</b></center>
		    <td><center><b style="color:blue">Editar</b></center></td>
		    <td><center><b style="color:red">Excluir</b></center></td>
			<td><center><b style="color:green">Chamados</b></center></td>
		
		<!-- ALGUMAS LINHAS ESTAO COM CSS INLINE PARA MUDANÇA DE COR !-->	

		</tr>

	<?php while ($resultado=mysqli_fetch_array($con)) {
		$id=$resultado["idequipamentos"];
		?>
		<tr>
			<td><center><?php echo $resultado["idequipamentos"] ?></center></td>
			<td><center><?php echo $resultado["nome"] ?></center></td>
			<td><center><?php echo $resultado["preco"] ?></center></td>
			<td><center><?php echo $resultado["numero_serie"] ?></center></td>
			<td><center><?php echo date('d/m/Y', strtotime($resultado["data_fabricacao"]))?></center></td>
			<td><center><?php echo $resultado["fabricante"] ?></center></td>
			<td><center><a href="editar.php?funcao=editar&id=<?php echo $id ?>">Editar</a></center></td>
			<td><center><a href="funcoes.php?funcao=excluir&id=<?php echo $id ?>">Excluir</center></td>
			<td><center><a href="chamados.php?=<?php echo $id ?>">Chamados</center></td>
			

		</tr>
	<?php } ?>	
	</table>
	<?php desconectar($conexao) ?>
	<br>
	<input type="button" value="Cadastrar" onclick="location.href='formulario.php'">
</body>
</html>