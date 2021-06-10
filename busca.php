<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "db_efetivo";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	//Recuperar o valor da palavra
	$SQL = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$SQL = "SELECT * FROM tb_efetivo WHERE re LIKE '%$SQL%'";
	$BUSCA_SQL = mysqli_query($conn, $SQL);
	
	if(mysqli_num_rows($BUSCA_SQL) <= 0){
		echo "Nenhum militar encontrado...";
	}else{
		while($rows = mysqli_fetch_assoc($BUSCA_SQL)){
			echo "<div class=table-responsive>
			<table class=table>
<thead>
    <tr>
      <th scope=col>RE</th>
      <th scope=col>Posto/Graduação</th>
      <th scope=col>Nome de Guerra</th>
	  <th scope=col>Companhia</th>
	  <th scope=col>Função</th>
	  <th scope=col>Telefone</th>
	  <th scope=col>Ver Mais</th>
    </tr>
  </thead>
  <tbody >
    <tr>
      <td >".$rows['RE']."</td>
      <td>".$rows['P_G']."</td>
      <td>".$rows['QRA']."</td>
	  <td>".$rows['CIA']."</td>
	  <td>".$rows['FUNCAO']."</td>
	  <td>".$rows['TELEFONE']."</td>
	  <td><a href='detalhes.php?id=".$rows['RE']."'>Ver Mais</a></td>
    </tr>
  </tbody>
</table></div>";
		}
	}
?>