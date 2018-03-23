<?php 


require ("sobre.php");
require("sobre2.php");

$sobre = new \aplicacao\v2\Sobre();
echo "Versao: ".$sobre->getVersao();

 ?>