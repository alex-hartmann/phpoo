<?php 


$dsn = "mysql:dbname=blog;host=localhost";

$dbuser = "root";
$dbpass = "";

try {

	$pdo = new PDO($dsn, $dbuser, $dbpass); // funcao conecta com o banco de dados
	$sql = "DELETE FROM usuarios WHERE id = 7";
	$pdo->query($sql);

	echo "User deletado com sucesso!";

} catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}


 ?>