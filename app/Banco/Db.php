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

	/**
	 * Método que busca dados no banco
	 * @param string $where
	 * @param string $order
	 * @param string $limit
	 * @param string $fields
	 * @return PDOStatement
	 */
	public function select($where = null, $order = null, $limit = null, $fields = '*'){
		//DADOS DA QUERY
		$where = strlen($where) ? 'WHERE ' .$where : '';
		$order = strlen($order) ? 'ORDER BY ' .$order : '';
		$limit = strlen($limit) ? 'LIMIT ' .$limit : '';
		//MONTA A QUERY
		$query = 'SELECT '.$fields.' FROM ' .$this->table. ' ' .$where. ' ' .$order. ' ' .$limit;

		//EXECUTA A QUERY
		return $this->execute($query);

	}

	/**
	 * Método que atualiza dados no banco
	 * @param string $where
	 * @param array $values
	 * @return boolean
	 */
	public function update($where, $values){
		//DADOS DA QUERY
		$fields = array_keys($values);
		//MONTA A QUERY
		$query = 'UPDATE ' .$this->table. ' SET ' .implode('=?,', $fields). '=? WHERE ' .$where;

		//EXECUTA A QUERY
		$this->execute($query,array_values($values));

		//RETORNA SUCESSO
		return true;

	}

	/**
	 * Método que deleta dados no banco
	 * @param string $where
	 * @return boolean
	 */
	public function delete($where){
		//MONTA A QUERY
		$query = 'DELETE FROM ' .$this->table. ' WHERE ' .$where;

		//EXECUTA A QUERY
		$this->execute($query);

		//RETORNA SUCESSO
		return true;

	}
}

?>