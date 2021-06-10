<?php
require ("conexao.php");

if(isset($_POST['usuario']) && isset($_POST['senha']) && $conn !=null){
	$query = $conn->prepare("SELECT * FROM tb_usuarios WHERE login = ? AND senha = ?");
	$query->execute(array($_POST['usuario'], $_POST['senha']));
	
		if($query->rowCount()){
			$user = $query->fetchAll(PDO::FETCH_ASSOC);			
			session_start();
			$_SESSION['usuario'] = array($user['usuario']);
			
			echo "<script> window.location = 'index_adm.php'</script>";
		}
		else{
			echo "<script> window.location = 'index.php'</script>";
			}
}else{
	echo "<script> window.location = 'index.php'</script>";
}

?>