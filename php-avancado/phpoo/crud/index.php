<?php 
require("banco.php");


$banco = new Banco("localhost","blog","root","");

// $banco->query("SELECT * FROM posts");
// echo $banco->numRows();

$banco->insert("posts", array(
	"titulo" => 'teste',
	"corpo" => 'teste'
))



 ?>