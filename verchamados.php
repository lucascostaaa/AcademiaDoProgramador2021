<?php
include "conexao.php";
$conexao = conectar("localhost","root","","equipamentos");
header('content-type: text/html; charset=ISO-8859-1');
$consulta = "select * from chamados";
$con = mysqli_query($conexao,$consulta);
?>
<!--  TELA COM OS CHAMADOS CADASTRADOS !-->

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
    
    <!-- CHAMANDO O CSS !-->

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3> Buscando Chamados </h3><br><br>
	<table border="1">
		<tr>
			<td><center><b>idchamados</b></center>
			<td><center><b>titulo_chamado</b></center>
			<td><center><b>descricao</b></center> 
		    <td><center><b>data_abertura</b></center>
		    <td><center><b style="color:blue">Editar</b></center></td>
		    <td><center><b style="color:red">Excluir</b></center></td>
			
        <!-- ALGUMAS LINHAS ESTAO COM CSS INLINE PARA MUDANÇA DE COR !-->

		</tr>

	<?php while ($resultado=mysqli_fetch_array($con)) {
		$id=$resultado["idchamados"];
		?>
		<tr>
			<td><center><?php echo $resultado["idchamados"] ?></center></td>
			<td><center><?php echo $resultado["titulo_chamado"] ?></center></td>
			<td><center><?php echo $resultado["descricao"] ?></center></td>
			<td><center><?php echo date('d/m/Y', strtotime($resultado["data_abertura"]))?></center></td>
			<td><center><a href="editarchamados.php?funcao=editar&id=<?php echo $id ?>">Editar</a></center></td>
			<td><center><a href="funcoes.php?funcao=excluir&id=<?php echo $id ?>">Excluir</center></td>
			
			

		</tr>
	<?php } ?>	
	</table>
	<?php desconectar($conexao) ?>
    <br>
	<input type="button" value="Cadastrar" onclick="location.href='chamados.php'">
</body>
</html>