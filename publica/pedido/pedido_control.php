<?php
    include_once('../../conecta.php');
    include_once('./pedido_class.php');
    $mod = new FinalizaPedido(); // criando objeto

    if (isset($_REQUEST['acao'])) //se chegou acao por GET ou POST
        $acao = $_REQUEST['acao'];
    else
        $acao = "";

    if ($acao == "") {  
        // mostra a listagem
        $rs = $mod->listar();
    }
?>


