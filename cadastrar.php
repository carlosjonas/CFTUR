<?php 

 require __DIR__.'/vendor/autoload.php';

 define('TITLE','Cadastrar viagem');

use \App\Entidade\Viagem;
//echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

if (isset($_POST['titulo'],$_POST['descricao'],$_POST['data_inicio'],$_POST['data_final'],$_POST['valor'],$_POST['vagas'],$_FILES['imagem'],$_POST['ativo'])) {

    $viagem = new Viagem();
    $viagem->titulo = $_POST['titulo'];
    $viagem->descricao = $_POST['descricao'];
    $viagem->data_inicio = $_POST['data_inicio'];
    $viagem->data_final = $_POST['data_final'];
    $viagem->valor = $_POST['valor'];
    $viagem->vagas = $_POST['vagas'];
    $viagem->nome_imagem = $_FILES['imagem']['name'];
    $viagem->tamanho_imagem = $_FILES['imagem']['size'];
    $viagem->tipo_imagem = $_FILES['imagem']['type'];
    $viagem->imagem = $_FILES['imagem']['tmp_name'];

    //Verificação da imagem
    if ( $viagem->imagem != "none" ){
        $abrir_arquivo = fopen($viagem->imagem, "rb");
        $conteudo = fread($abrir_arquivo, $viagem->tamanho_imagem);
        $conteudo = addslashes($conteudo);
        fclose($abrir_arquivo);

        $viagem->imagem = $conteudo;
    }

    $viagem->ativo = $_POST['ativo'];

    $viagem->cadastrar();

    Header( "Content-type: image/gif");
    header('location: home.php?status=success');
    exit;
}

include  __DIR__.'\includes\header.php';
include  __DIR__.'\includes\formulario.php';
include  __DIR__.'\includes\footer.php';

 ?>