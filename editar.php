<?php 

 require __DIR__.'/vendor/autoload.php';

 define('TITLE','Editar viagem');

use \App\Entidade\Viagem;

//Validação do get
if (!isset($_GET['id']) OR !is_numeric($_GET['id'])) {
    header("location: home.php?status=error");
    exit;
}

//Consultando a viagem
$viagem = Viagem::getViagem($_GET['id']);

//Validação da existência  de instância da viagem
if (!$viagem instanceof Viagem) {
    header("location: home.php?status=error");
    exit;
}

if (isset($_POST['titulo'],$_POST['descricao'],$_POST['data_inicio'],$_POST['data_final'],$_POST['valor'],$_POST['vagas'],$_POST['imagem'],$_POST['ativo'])) {

    $viagem->titulo = $_POST['titulo'];
    $viagem->descricao = $_POST['descricao'];
    $viagem->data_inicio = $_POST['data_inicio'];
    $viagem->data_final = $_POST['data_final'];
    $viagem->valor = $_POST['valor'];
    $viagem->vagas = $_POST['vagas'];
    $viagem->imagem = $_POST['imagem'];
    $viagem->ativo = $_POST['ativo'];
    $viagem->atualizar();

    header('location: home.php?status=success');
    exit;
}

include  __DIR__.'\includes\header.php';
include  __DIR__.'\includes\formulario.php';
include  __DIR__.'\includes\footer.php';

 ?>