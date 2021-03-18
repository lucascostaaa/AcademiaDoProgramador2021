<script type="text/javascript">
function Alerta(){
	alert("Cadastro realizado com sucesso");
}	

</script>


<!DOCTYPE html>
<html>
<head>
	<title> Cadastrar Equipamentos </title>

	<!-- CHAMANDO O CSS !-->
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	
	<h3> Cadastro Equipamentos </h3><br><br><br>
	<form action="funcoes.php?funcao=gravar" method="POST">
		
		Nome <input type="text" name="nome" required=""><br><br>

		Preço <input type="text" name="preco" required=""><br><br>

		Número de Serie <input type="text" name="numero_serie" required=""><br><br>

		Data de fabricação <input type="date" name="data_fabricacao" required=""><br><br>

		Fabricante <input type="text" name="fabricante" required=""><br><br>



		<input type="submit" value="Cadastrar" onclick="Alerta()">
		<input type="button" value="Ver dados Cadastrados" onclick="location.href='index.php'">
	</form>
	
</body>
</html>