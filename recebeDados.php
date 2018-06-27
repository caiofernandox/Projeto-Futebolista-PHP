<?php
			 $nome = $_POST["nome"];
			 $time = $_POST["time"];
			 $email = $_POST["email"];
			 $dataNascimento = $_POST["dataNascimento"];
			 $estado = $_POST["estado"];
			 $cidade = $_POST["cidade"];
			 $senha = $_POST["senha"];
			 $confirmarSenha = $_POST["confirmarSenha"];
			 $erro = FALSE;

	$conexao = mysql_connect("localhost","root");
		if (!$conexao)	
		die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());

//conectando com a tabela do banco de dados
	$banco = mysql_select_db("usuario",$conexao);
		if (!$banco)
		die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

	$query = "INSERT INTO `usuario` ( `nome` , `time` , `email` , `dataNascimento` , `estado` , `cidade` , `senha` ) 
		VALUES ('$nome', `$time` , `$email` , `$dataNascimento` , `$estado` , `$cidade` , `$senha`)";

mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?>
