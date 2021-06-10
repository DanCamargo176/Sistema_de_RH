<?php

include 'conexao.php';

$cod = $_GET['id']; // Recebendo o valor enviado pelo link


$stmt = $conn->prepare("DELETE FROM tb_efetivo WHERE re = ?");
$stmt->bindParam(1, $cod);
$stmt->execute();
$deleted = $stmt->rowCount();

if($deleted){
echo "<script> alert('Registro excluído com sucesso!')</script>";
echo "<script>window.location.href='tela_efetivo.php'</script>";

}else{
		echo "<script> alert('Falha ao deletar. Contate o Administrador do Sistema!')</script>";
		echo "<script>window.location.href='tela_efetivo.php'</script>";	
}; /*Fim do ELSE*/
?>
