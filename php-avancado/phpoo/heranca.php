<?php 

class Animal {
	public $nome;
	private $idade;
}


class Cavalo extends Animal{
	private $patas;
	private $pelo; 
}


class Gato extends Animal{
	private $patas;
	private $miado;
 }

 $cavalo = new Cavalo();
 $cavalo->nome = "Cavalo 1";


 echo "O nome do cavalo é". $cavalo->nome;

 ?>
