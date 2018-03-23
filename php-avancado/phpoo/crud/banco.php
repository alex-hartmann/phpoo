<?php 

class Banco{

	private $pdo;
	private $numRows;
	private $array;


	public function __construct($host, $dbname, $dbuser, $dbpass){

		try {
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host: ".$host, $dbuser, $dbpass);
		} catch (PDOException $e) {
			echo "Falha ao conectar = ". $e->getMessage();
		}
	}

	public function query($sql){
		$query = $this->pdo->query($sql);
		$this->numRows = $query->rowCount();
		$this->array = $query->fetchAll();

	}

	public function numRows(){
		return $this->numRows;
	}

	public function result(){
		return $this->array;
	}

	public function insert($table, $data = array()){
		if(!empty($table) && ( is_array($data) && count($data) >  0)) :

			$sql = "INSERT INTO ".$table. " SET ";
			$dados = array();
			foreach ($data as $chave => $valor):
				$dados[] = $chave. " = '". addslashes($valor)."'";
			endforeach;
			$sql = $sql.implode(", ", $dados);
			$this->pdo->query($sql);

		endif;
	}

}

 ?>