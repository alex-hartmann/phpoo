<?php 

// interface // serve de estrutura para outros objetos

interface Animal {

	public function andar();
}

class Cachorro implements Animal {
	public function andar(){
		echo "Estou andando";
	}
}

$dog = new Cachorro();
$dog->andar();


 ?>