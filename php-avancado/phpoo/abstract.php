<?php 

abstract class Animal {
	private $nome;
	private $idade;

	abstract protected function andar();

	public function setNome($n){
		$this->nome = $n;
	}

	public function getNome(){
		return $this->nome;
	}
}


class Cavalo extends Animal{
	private $patas;
	private $pelo; 

	public function andar(){
		echo "ok";
	}
}
 
 $cavalo = new Cavalo();
 $cavalo->andar();
 $cavalo->setNome("Teste");

echo $cavalo->getNome();

 ?>
