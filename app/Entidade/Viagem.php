<?php 

namespace App\Entidade;

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
		
		//Atribuir o id da vaga
		//Retornar sucesso
	}
}

 ?>