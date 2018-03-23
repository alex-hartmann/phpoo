<?php require("config.php"); ?>

<a href="adduser.php">Adicionar novo user</a>
<table border="0" width="100%">
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>Acões</th>
	</tr>
	<?php 

	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0):
		foreach ($sql->fetchAll() as $user) {
			echo "<tr>";
				echo "<td>". $user['nome']. "</td>";
				echo "<td>". $user['email']. "</td>";
				echo '<td><a href="editar.php?id='.$user['id'].'">Editar</a> - <a href="excluir.php?id='.$user['id'].'"">Excluir</a></td>';
			echo "</tr>";
		}
	endif;
	 ?>
</table>