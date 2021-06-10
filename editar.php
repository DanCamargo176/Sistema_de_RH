<?php
	session_start();
		if(isset($_SESSION['usuario'])){
			$usuario = $_SESSION['usuario'][0];
			
			
		}else{
			echo "<script> window.location = 'index.php'</script>";
		}
?>
<?php
include_once('conexao.php');
$id = $_GET['id'];
 ?>
 <!--php-->


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>1º BPTran</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Atualizar Cadastro de Efetivo</h2>
                </div>
                <div class="card-body">
				
				
				<?php
				$rs = $conn->prepare("SELECT * FROM tb_efetivo WHERE re=$id");;
		if($rs->execute()){
				if($rs->rowCount() > 0){
					while($row = $rs->fetch(PDO::FETCH_OBJ)){
		
					?>
			
				
                    <form method="POST" action="update_efetivo_img.php" enctype="multipart/form-data">
<!-- DADOS PESSOAIS-->
                        <div class="form-row">
                            <div class=""><h2>Dados Pessoais</h2></div>
                        </div>
						<div class="form-row">
                            <div class="name">Nome Completo</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nome_completo" value="<?php echo $row->NOME_COMPLETO; ?>">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Data de Nascimento</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="dt_nasc" value="<?php echo $row->DATA_NASCIMENTO; ?>">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">CPF</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="cpf" value="<?php echo $row->CPF; ?>">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">RG</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="rg" value="<?php echo $row->RG; ?>">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">CNH</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="cnh" value="<?php echo $row->CNH; ?>">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Endereço</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="endereco" value="<?php echo $row->ENDERECO; ?>">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Telefone</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="telefone" value="<?php echo $row->TELEFONE; ?>">
                            </div>
                        </div>
						
<!-- DADOS FUNCIONAIS-->						
						<div class="form-row">
                            <div class=""><h2>Dados Funcionais</h2></div>
                        </div>
						<div class="form-row">
                            <div class="name">Posto/Graduação</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="pg" value="<?php echo $row->P_G; ?>">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">RE</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="re" value="<?php echo $row->RE; ?>">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Nome de Guerra</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="ng" value="<?php echo $row->QRA; ?>">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Companhia</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="cia" value="<?php echo $row->CIA; ?>">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Função</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="funcao" value="<?php echo $row->FUNCAO; ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email Funcional</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="example@policiamilitar.sp.gov.br" value="<?php echo $row->EMAIL_FUNCIONAL; ?>">
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Seção</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="secao" value="<?php echo $row->SECAO; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Observações</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="obs" placeholder="Digite as observações"><?php echo $row->OBS; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Foto de Identificação</div>
                            <div class="value">
                                <div class="input-group js-input-file">									
									<input type="file" name="foto" value="">
                                </div>
                                <div class="label--desc"></div>
                            </div>
                        </div>
		<?php }}} ?>
						<div class="card-footer" align="center">
                    <input class="btn btn--radius-2 btn--blue-2" type="submit" name="grava" Value="Atualizar"></br></br>
					<a href="tela_efetivo.php">Cancelar</a>
                </div>
                    </form>
                </div>			
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->