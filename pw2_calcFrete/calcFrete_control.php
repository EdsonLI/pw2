<?php
    //include('../conecta.php');
    include('calcFrete_class.php');
    $mod = new CalcFrete(); // criando objeto a partir da classe CalcFrete

    if (isset($_REQUEST['acao'])) //se chegou acao por GET ou POST
        $acao = $_REQUEST['acao'];
    else
        $acao = "";

    if ($acao == "calcFrete") {  // mostra a listagem
        //echo $cf->Valor;
        $modalidades = array('41106', '40215', '40010');
        $htm = '';
        for($cont = 0; $cont < 3; $cont++) {
            $cf = $mod->calcula_frete($modalidades[$cont], '99064440', $_REQUEST['cep'], '2', 's', '700', 's');
            //echo $cf->Erro.'<br/>';
            //echo $_REQUEST['CEP'];
            switch ($cf->Codigo) {
                case 41106: $servico = 'PAC';
                    break;
                //case 40045: $servico = 'SEDEX a Cobrar';
                    //break;
                case 40215: $servico = 'SEDEX 10';
                    break;
                //case 40290: $servico = 'SEDEX Hoje';
                    //break;
                default: $servico = 'SEDEX';
            }
            //echo $cf->Valor;
            $erro = $cf->Erro;
            if((int)$erro !== (int)'008') {
                $htm .= '<label class="btn">';
                    $htm .= '<input type="radio" id="entrega" name="entrega" value="'.$erro." ".$modalidades[$cont].'" /> '.$servico.': R$ <span class="val_frete">'.$cf->Valor.'</span> - Prazo Estimado: <span class="prazo_frete">'.$cf->PrazoEntrega.'</span> dia(s)';
                $htm .= '</label> <br>';
                unset($cf);
            }
        };


        echo $htm;
        //echo $cf->Codigo;
        //echo $cf->Valor;
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
