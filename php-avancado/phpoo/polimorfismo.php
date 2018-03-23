<?php 

// POLIMORFISMO = é quando substituo uma funcao herdad por uma do propio objeto

class Animal {

	public function getNome(){
		echo "getNome da classe aniaml";
			}


	public function testar(){
		echo "Testado!";
	}
}
class Cachorro extends Animal{

	public function getNome(){
		$this->testar();
	}

}

$cachorro = new Cachorro();
$cachorro->getNome();

 ?>