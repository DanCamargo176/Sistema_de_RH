<?php
require './conexao.php';

if(isset($_FILES['arquivo'])){
	$arquivo = $_FILES['arquivo']['name'];
	$extensao = strtolower(pathinfo($arquivo,pathinfo_extension));//String de conversão para minusculo da extensão do arquivo carregado
	
	//Conversão do nome do arquivo carregado no input
	$novo_nome = md5(time()).".".$extensao;
	
	//Pasta onde a foto vai ser salva
	$diretorio = "upload/";
	
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio , $novo_nome);
		
}
?>

<!--DOCTYPE html-->
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
                    <h2 class="title">Cadastro de Efetivo</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="insere_efetivo.php" enctype="multipart/form-data">
<!-- DADOS PESSOAIS-->
                        <div class="form-row">
                            <div class=""><h2>Dados Pessoais</h2></div>
                        </div>
						<div class="form-row">
                            <div class="name">Nome Completo</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nome_completo">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Data de Nascimento</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="dt_nasc">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">CPF</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="cpf">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">RG</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="rg">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">CNH</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="cnh">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Endereço</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="endereco">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Telefone</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="telefone">
                            </div>
                        </div>
						
<!-- DADOS FUNCIONAIS-->						
						<div class="form-row">
                            <div class=""><h2>Dados Funcionais</h2></div>
                        </div>
						<div class="form-row">
                            <div class="name">Posto/Graduação</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="pg">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">RE</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="re">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Nome de Guerra</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="ng">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Companhia</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="cia">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Função</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="funcao">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Seção</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="secao">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email Funcional</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="example@policiamilitar.sp.gov.br">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Observações</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="obs" placeholder="Digite as observações"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Foto de Identificação</div>
                            <div class="value">
                                <div class="input-group js-input-file">									
									<input type="file" name="arquivo"/>
                                </div>
                                <div class="label--desc">Faça o UPLOAD da foto do policial</div>
                            </div>
                        </div>
						
						<div class="card-footer" align="center">
                    <input class="btn btn--radius-2 btn--blue-2" type="submit" name="Cadastrar" Value="Cadastrar"></br></br>
					<input type="reset" class="btn btn--radius-2 btn--blue-2" name="reset" value="Limpar"></br></br>	
					<a href="tela_efetivo.php">Sair</a>
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