<?php 

 require __DIR__.'/vendor/autoload.php';

 define('TITLE','Cadastrar viagem');

use \App\Entidade\Viagem;
//echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

if (isset($_POST['titulo'],$_POST['descricao'],$_POST['data_inicio'],$_POST['data_final'],$_POST['valor'],$_POST['vagas'],$_POST['imagem'],$_POST['ativo'])) {

    $viagem = new Viagem();
    $viagem->titulo = $_POST['titulo'];
    $viagem->descricao = $_POST['descricao'];
    $viagem->data_inicio = $_POST['data_inicio'];
    $viagem->data_final = $_POST['data_final'];
    $viagem->valor = $_POST['valor'];
    $viagem->vagas = $_POST['vagas'];
    $viagem->imagem = $_POST['imagem'];
    $viagem->ativo = $_POST['ativo'];

    $viagem->cadastrar();

    header('location: home.php?status=success');
    exit;
}

include  __DIR__.'\includes\header.php';
include  __DIR__.'\includes\formulario.php';
include  __DIR__.'\includes\footer.php';

 ?>