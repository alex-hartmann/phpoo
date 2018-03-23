<?php 


$dsn = "mysql:dbname=blog;host=localhost";

$dbuser = "root";
$dbpass = "";

try {

	$pdo = new PDO($dsn, $dbuser, $dbpass); // funcao conecta com o banco de dados
	
	$sql = "SELECT * FROM usuarios WHERE email = 'mraleehshd@gmail.com'";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0){

		foreach ($sql->fetchAll() as $user) {
			echo "Nome: ". $user['nome']. " - ". $user['email']."<br>";
		}

	}else {
		echo "Não a usuarios cadastrados!";
	}

} catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}


 ?>