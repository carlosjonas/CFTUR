<?php

namespace App\Banco;

use \PDO;
use \PDOException;

class Db{

	/**
	 * Host de conexão com o banco de dados
	 * @var string
	 */
	const HOST = 'localhost';

	/**
	 * Senha do banco de dados
	 * @var string
	 */
	const PASSWORD = '';

	/**
	 * Usuário do banco de dados
	 * @var string
	 */
	const USER = 'root';

	/**
	 * Nome do banco de dados
	 * @var string
	 */
	const NAME = 'cftur';

	/**
	 * Nome da tabela do banco de dados
	 * @var string
	 */
	private $table;

	/**
	 * Instância de conexão com o banco de dados
	 * @var PDO
	 */
	private $conexao;

	/**
	 * Construtor da classe
	 * @param string table
	 */
	public function __construct($table = null){
		$this->table = $table;
		$this->setConnection();
	}

	/**
	 * Método que cria conexão com o banco
	 * @param string table
	 */
	private function setConnection(){
		try{
			$this->conexao = new PDO('mysql:host=' .self::HOST. ';dbname=' .self::NAME,self::USER,self::PASSWORD);
			$this->conexao->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			die("ERROR: " .$e->getMessage());
		}
	}
	/**
	 * Método que executa querys no banco
	 * @param string $query
	 * @param array $params
	 * @return PDOStatement
	 */
	public function execute($query,$params = []){
		try{
			$statement = $this->conexao->prepare($query);
			$statement->execute($params);
			return $statement;
		}catch(PDOException $e){
			die("ERROR: " .$e->getMessage());
		}
	}

	/**
	 * Método que insere dados no banco
	 * @param array $values
	 * @return integer ID inserido
	 */
	public function insert($values){
		//DADOS DA QUERY
		$fields = array_keys($values);
		$binds = array_pad([],count($fields),'?');
		//MONTA A QUERY
		$query = 'INSERT INTO ' .$this->table. ' (' .implode(',',$fields). ') VALUES('.implode(',', $binds).')';
		$this->execute($query,array_values($values));
		//RETORNA O ID INSERIDO
		return $this->conexao->lastInsertId();

	}
}


?>