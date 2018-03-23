<?php 

require("config.php");

$id = 0;
if(isset($_GET['id']) && !empty($_GET['id'])):
	$id = addslashes($_GET['id']);
endif;
	if(isset($_POST['nome']) && !empty($_POST['nome'])):
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		$sql = "UPDATE usuarios SET nome = '$nome', email= '$email' WHERE id='$id'";
		$pdo->query($sql);

		header("Location: index.php");

	endif;

	$sql = "SELECT * FROM usuarios WHERE id= '$id'";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0 ):
		$dado = $sql->fetch();
	else:
		header("Location: index.php");
	endif;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST"> 
	Nome: <br/>
	<input type="text" name="nome" value="<?= $dado['nome'];?>"> <br><br>
	Email: <br/>
	<input type="email" name="email" value="<?= $dado['email'];?>"> <br><br>
	<input type="submit" value="Atualizar">
</form>
</body>
</html>