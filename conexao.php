<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "db_efetivo";
	
	//Criar a conexao
	try{
	
	$conn = new PDO("mysql:host=$servidor; dbname=$dbname", $usuario, $senha);
	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $erro){
		echo "Ocorreu um erro de conexão:{$erro->getMessage()}";
		$conexao = null;
	}
	?>