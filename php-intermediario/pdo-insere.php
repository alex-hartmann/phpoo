<?php 


$dsn = "mysql:dbname=blog;host=localhost";

$dbuser = "root";
$dbpass = "";

try {

	$pdo = new PDO($dsn, $dbuser, $dbpass); // funcao conecta com o banco de dados
	$nome = "Testador";
	$email = "testeasd@teste.com";
	$senha = md5("1sda23");

	$sql = "INSERT INTO usuarios SET nome = '$nome', email= '$email', senha= '$senha'";
	$sql = $pdo->query($sql);

	echo "Usuario inserido: ".$pdo->lastInsertId(); //Func faz aparecer o id do ultimo valor cadastrado

	

} catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}


 ?>