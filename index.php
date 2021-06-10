<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<form method="POST" action ="valida.php">
<div class="login-box">
  <h1><center>ÁREA RESTRITA</center></h1>
			<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="text" name="usuario" placeholder="Usuário">
			</div>
			<div class="textbox">
			<i class="fas fa-lock"></i>
			<input type="password" name="senha" placeholder="Senha">
			</div>
			

  <input type="submit" class="btn" value="Entrar">
  <div><center><a href="informacoes.php">Esqueceu a Senha? Clique aqui!</a></center></div>
</div>
</form>
  </body>
</html>