<script type="text/javascript">
function Alerta(){
	alert("Cadastro realizado com sucesso");
}	



</script>


<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Chamado</title>

    <!-- CHAMANDO O CSS !-->

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3> Cadastro Chamados </h3><br><br><br>
	<form action="funcoes.php?funcao=gravar" method="POST">
		
		Titulo Chamado <input type="text" name="titulo_chamado" required=""><br><br>

		Descrição do Chamdo <input type="text" name="descricao" required=""><br><br>

		Data de abertura <input type="date" name="data_abertura" required=""><br><br>


		<input type="submit" value="Cadastrar" onclick="Alerta()">
		<input type="button" value="Ver chamados Cadastrados" onclick="location.href='verchamados.php'">
	</form>

</body>
</html>