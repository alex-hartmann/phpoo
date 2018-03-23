<?php 


class Post {
	private $titulo; 
	private $data;
	private $corpo;
	private $comentarios;
	private $qtComent;

	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($t){
		if(is_string($t)):
			$this->titulo = $t;
		endif;
	}

	public function addComentario($msg){
		$this->comentarios[] = $msg;
		$this->ContarComentarios(); 
	}

	public function getQtdsComent(){
		return $this->qtComent;	
	}

	private function ContarComentarios(){
		$this->qtComent = count($this->comentarios);
	}
}

$Post = new Post();
$Post->addComentario("Teste");
$Post->addComentario("Teste 2");
$Post->addComentario("Teste 3 ");
$Post->addComentario("Teste 2");
$Post->addComentario("Teste 3 ");

echo "Quantidade de comentarios " . $Post->getQtdsComent();


 ?>