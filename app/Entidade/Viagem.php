<?php 

namespace App\Entidade;

use \App\Banco\Db;
use \PDO;

class Viagem{

	/**
	 * Identificador da viagem
	 * @var integer
	 */
	public $id;

	/**
	 * Título da viagem
	 * @var text
	 */
	public $titulo;

	/**
	 * Descrição da viagem
	 * @var string
	 */
	public $descricao;

	/**
	 * Data de início da viagem
	 * @var date
	 */
	public $data_inicio;

	/**
	 * Data final da viagem
	 * @var date
	 */
	public $data_final;

	/**
	 * Valor da viagem
	 * @var number
	 */
	public $valor;

	/**
	 * Vagas da viagem
	 * @var number
	 */
	public $vagas;

	/**
	 * Imagem da viagem
	 * @var string
	 */
	public $imagem;

	/**
	 * Status da viagem
	 * @var boolean
	 */
	public $ativo;

	/**
	 * Método responsável por cadastrar uma viagem no banco
	 * @return boolean
	 */
	public function cadastrar(){
		//Inserir a vaga no banco
		$banco = new Db('viagens');
		$this->id = $banco->insert([
			'titulo' => $this->titulo,
			'descricao' => $this->descricao,
			'data_inicio' => $this->data_inicio,
			'data_final' => $this->data_final,
			'valor' => $this->valor,
			'vagas' => $this->vagas,
			'imagem' => $this->imagem,
			'ativo' => $this->ativo,
		]);

		//Retornar sucesso
		return true;
	}

	/**
	 * Método responsável por obeter as viagens no banco
	 * @param string $where
	 * @param string $order
	 * @param string $limit
	 * @return array
	 */
	public static function getViagens($where = null, $order = null, $limit = null){
		return (new Db('viagens'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
	}
}

 ?>