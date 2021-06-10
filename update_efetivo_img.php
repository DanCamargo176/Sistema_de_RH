<?php
session_start();
include_once('conexao.php');

// Cria Conexao BD SQL 
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
// CHECA A CONEXAO COM O BANCO DE DADOS
if (!$conn) {
  die("Falha de Conexão: " . mysqli_connect_error());
}

			
$re = $_POST['re'];
$pg = $_POST['pg'];
$qra = $_POST['ng'];
$cia = $_POST['cia'];
$funcao = $_POST['funcao'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$nome_completo = $_POST['nome_completo'];
$email = $_POST['email'];
$dt_nasc = $_POST['dt_nasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$cnh = $_POST['cnh'];
$obs = $_POST['obs'];
$foto = $_FILES['foto'];
$secao = $_POST['secao'];


if(isset($_FILES['foto']['tmp_name']) and $_FILES['foto']['tmp_name'] != ""){
   // Faz o upload da imagem e os dados salva no banco     
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto['name'], $ext);

            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

            // Caminho de onde ficará a imagem
            $caminho_imagem = "fotos/" . $nome_imagem;

            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
			
			//Query inserção de dados
			$sql = "UPDATE tb_efetivo SET P_G ='$pg', QRA ='$qra', CIA ='$cia', FUNCAO ='$funcao', ENDERECO ='$endereco', TELEFONE ='$telefone', NOME_COMPLETO ='$nome_completo', EMAIL_FUNCIONAL ='$email', DATA_NASCIMENTO ='$dt_nasc', FOTO ='$nome_imagem', CPF ='$cpf', RG ='$rg', CNH ='$cnh', OBS ='$obs', SECAO ='$secao' WHERE RE='$re'";
			//Prepara a conexao com o banco incluindo a query de insercao acima e executa a query de insercao apos realizar com sucesso a conexao com o banco de dados sql, baseando-se nos parametros passados anteriormente.
			if (mysqli_query($conn, $sql)){
			echo "<script> alert ('Dados e Imagens Atualizados com Sucesso!'); </script>";}
			else {
			echo "Erro ao Atualizar Dados e Foto";
			}
			//Redireciona para pagina index_adm.php se conseguir gravar os dados no banco de dados.
			echo "<script> window.location.href='tela_efetivo.php'</script>";
}else{
	$sql = "UPDATE tb_efetivo SET P_G ='$pg', QRA ='$qra', CIA ='$cia', FUNCAO ='$funcao', ENDERECO ='$endereco', TELEFONE ='$telefone',
	NOME_COMPLETO ='$nome_completo', EMAIL_FUNCIONAL ='$email', DATA_NASCIMENTO ='$dt_nasc', CPF ='$cpf', RG ='$rg', CNH ='$cnh', OBS ='$obs', SECAO ='$secao' WHERE RE='$re'";
	if (mysqli_query($conn, $sql)){
			echo "<script> alert ('Atualização de Dados Bem Sucedida!!'); </script>";}
			else {
			echo "Erro ao Atualizar os Dados!";
			}
			//Redireciona para pagina index_adm.php se conseguir gravar os dados no banco de dados.
			echo "<script> window.location.href='tela_efetivo.php'</script>";
   // Salva apenas o dados no banco;
   // Neste caso aqui é opcional passar o nome da foto.
   // Já que ela já vai estar salva na sua tabela então pode remover o campo com o nome
   // E remover essa coluna do seu sql
   echo "<script> alert ('Somente dados atualizados!'); </script>";
}
?>