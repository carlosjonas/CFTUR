<?php 

 require __DIR__.'/vendor/autoload.php';

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

if (isset($_POST['excluir'])) {

    $viagem->excluir();

    header('location: home.php?status=success');
    exit;
}

include  __DIR__.'\includes\header.php';
include  __DIR__.'\includes\confirmar-exclusao.php';
include  __DIR__.'\includes\footer.php';

 ?>