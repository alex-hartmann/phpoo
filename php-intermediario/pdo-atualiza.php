<?php 


$dsn = "mysql:dbname=blog;host=localhost";

$dbuser = "root";
$dbpass = "";

try {

	$novasenha = md5("teste");

	$pdo = new PDO($dsn, $dbuser, $dbpass); // funcao conecta com o banco de dados
	$sql = "UPDATE usuarios SET senha = '$novasenha' WHERE id = 1 ";
	$pdo->query($sql); // pode ser utilizado direto o pdo ja que nao precisa de um retorno

	echo "User alterado com sucesso!";

} catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}


 ?>