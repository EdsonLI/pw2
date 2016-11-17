<?php
    //include('../conecta.php');
    include('calcFrete_class.php');
    $mod = new CalcFrete(); // criando objeto a partir da classe CalcFrete

    if (isset($_REQUEST['acao'])) //se chegou acao por GET ou POST
        $acao = $_REQUEST['acao'];
    else
        $acao = "";

    if ($acao == "calcFrete") {  // mostra a listagem
        $rs = $mod->calcula_frete('41106', '97032120', '99170035', '2', 's', '700', 's');
    }

    /*if ($acao == "listar") {
       echo  $rs = $mod->listarTabela();
    }

    if ($acao == "alterar") {
       echo  $rs = $mod->alterar($_REQUEST['id']);
    }

    if ($acao == "excluir") {
        echo $mod->excluir($_REQUEST['id']);
    }

    if ($acao == "gravarIncluir") {
        echo $mod->gravarIncluir($_REQUEST['marca'], $_REQUEST['modelo'], $_REQUEST['ano']);

    }
    if ($acao == "gravarAlterar") {
        echo $mod->gravarAlterar($_REQUEST['id'], $_REQUEST['marca'], $_REQUEST['modelo'], $_REQUEST['ano']);
    }*/
?>