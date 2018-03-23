<?php 
session_start();
if(isset($_POST['email']) && !empty($_POST['email'])):
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$dsn = "mysql:dbname=blog;host:localhost";
	$dbuser = "root";
	$dbpass = "";

	try {
		$db = new Pdo($dsn, $dbuser, $dbpass);
		$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha= '$senha'");

		if($sql->rowCount() > 0 ):

			$dado = $sql->fetch();

			$_SESSION['id'] = $dado['id']; 

			header("Location: index.php");

		endif;

	} catch (PDOException $e) {
		echo "Falhou a conexao ". $e->getMessage();
	}


endif;

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login - Sistema</title>
</head>
<body>
	<form method="POST">
		E-mail: <br>
		<input type="email" name="email"> <br><br>
		Senha: <br>
		<input type="password" name="senha"><br><br>
		<input type="submit" name="Entrar">
	</form>
</body>
</html>