<!--php-->
<?php
	session_start();
		if(isset($_SESSION['usuario'])){
			$usuario = $_SESSION['usuario'][0];
			
			
		}else{
			echo "<script> window.location = 'index.php'</script>";
		}
?>

<!--HTML-->
<!DOCTYPE html>
	<head>
		  <title>1º BPTran</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		</head>
	<!--INICIO DO MENU-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand">1º Batalhão de Polícia de Trânsito</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="index_adm.php">Início <span class="sr-only"></span></a>
		  </li>
		  
		  <div class="dropdown">
			  <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Consultar Efetivo</button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="tela_efetivo.php">Efetivo Completo</a>
						<a class="dropdown-item" href="busca_re.php">Consulta por RE</a>
						<a class="dropdown-item" href="busca_qra.php">Consulta por QRA</a>
						<a class="dropdown-item" href="tela_efetivo_1cia.php">Efetivo 1ª CIA</a>
						<a class="dropdown-item" href="tela_efetivo_2cia.php">Efetivo 2ª CIA</a>
						<a class="dropdown-item" href="tela_efetivo_3cia.php">Efetivo 3ª CIA</a>
						<a class="dropdown-item" href="tela_efetivo_ptt.php">Efetivo PTT</a>
						<a class="dropdown-item" href="tela_efetivo_em.php">Efetivo EM</a>
						<a class="dropdown-item" href="tela_efetivo_sala_situacao.php">Efetivo Sala de Situação</a>
	
  </div>
</div> 
				<li class="nav-item active">
			<a class="nav-link" href="cad_efetivo.php">Adicionar Militar <span class="sr-only"></span></a>
		  </li>
		  <li class="nav-item active">
			<a class="nav-link " href="logout.php">Sair <span class="sr-only"></span></a>
		  </li>
		</ul>
	  </div>
	</nav>
	<!--FIM DO MENU-->
<body>






	<?php
	//Lista todo o Efetivo do Banco de Dados SQL
	include_once('conexao.php');
	$palavra = 'SALA DE SITUAÇÃO';
	$rs = $conn->prepare("SELECT * FROM tb_efetivo WHERE cia LIKE '%$palavra%'");;
		if($rs->execute()){
				if($rs->rowCount() > 0){?>
				
				<div class="row">
					<?php while($row = $rs->fetch(PDO::FETCH_OBJ)){?>
				<div class="thumbnail" style="width: 20rem;"> 
							<center>
							  <div class="card-body"> <?php echo "<img src='fotos/".$row->FOTO."' alt='Foto de exibição' width='200' height='300' /><br />"; ?>
									<h5 class="card-title"><?php echo $row->QRA . "<br />"; ?></h5>
									<p class="card-text"><?php echo $row->P_G . "<br />"; ?></p>
									<p class="card-text"><?php echo $row->RE . "<br />"; ?></p>
									<?php echo "<a href='detalhes.php?id=".$row->RE."'>Ver Mais</a><br><hr>";?>
									<?php echo "<a href='editar.php?id=".$row->RE."'>Atualizar</a><br><hr>";?>
									<?php echo "<a href='delete_efetivo.php?id=".$row->RE."'>Excluir</a><br><hr>";?>				
							  </div>
							</center>
				</div>
					  
	  


<?php 
           } ?> </div>	<!--Fecha o While-->
			
			
			<?php
         } //Fecha o 2º IF da Condição da COntagem de Linhas > 0
		
		
}	//Fecha o 1º IF DO EXECUTE
?>
</body>
</html>