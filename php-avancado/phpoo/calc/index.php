<?php 

class Calculadora{
	private $n;

	public function __construct($numeroinicial){
		$this->n = $numeroinicial;
	}

	public function somar($n1){
		$this->n += $n1;
		return $this;
	}

	public function diminuir($n1){
		$this->n -= $n1;
		return $this;
	}

	public function multiplicar($n1){
		$this->n *= $n1;
		return $this;
	}
	public function dividir($n1){
		$this->n /= $n1;
		return $this;
	}

	public function resultado(){
		echo $this->n;
	}
}

$calc = new Calculadora(10);
$calc->somar(2)->somar(10)->diminuir(3)->multiplicar(5)->dividir(2);

$resultado = $calc->resultado(); // 22.5

 ?>