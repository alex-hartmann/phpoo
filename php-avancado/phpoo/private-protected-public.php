<?php 

class Usuario {

//public = pode ser acessado de fora do objeto
//private = utilizado para auxiliar dentro da classe, so sao acessiveis dentro da classe
//protected = so vai poder ser acessivel dentro da classe, ou dentro de classes que agregao a ela

	public function trocarNome($senhaAtual, $novaSenha){

		// Conecar ao banco de dados
		// Verificar se a senha atual esta correta.
		// Trocar a senha
		$this->conectarBD();

	}

	private function conectarBD(){

	}

	protected function algumaCoisa(){

	}
}


 ?>