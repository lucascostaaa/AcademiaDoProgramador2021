<?php
function conectar($local, $usuario, $senha, $banco)
{
$conexao = mysqli_connect("$local","$usuario","$senha","$banco");


  return $conexao;
}





function desconectar($encerrar)
{
	if ($encerrar == true){
	mysqli_close($encerrar);
	
}

}
?>


