<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Consulta por RE</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="javascriptpersonalizado.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
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
		<div class="container theme-showcase" role="main">
			<div class="page-header"></br></br>
				<center><h1>Consulta por RE</h1></center></br>
				<form method="POST" id="form-pesquisa" action="">
					<div class="form-group">
						<input type="text" name="pesquisa" class="form-control" id="pesquisa" placeholder="O que você está procurando?">
					</div>
				</form>
				
				
			</div>
			<div class="row">
				<div class="table-responsive resultado">
				</div>
			</div>
			
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>