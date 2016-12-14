<?php
    include_once('../../conecta.php');
    include_once('calcFrete_class.php');
    $mod = new CalcFrete(); // criando objeto a partir da classe CalcFrete

    if (isset($_REQUEST['acao'])) //se chegou acao por GET ou POST
        $acao = $_REQUEST['acao'];
    else
        $acao = "";

    if ($acao == "") {  // mostra a listagem
        //echo "chamou listar";
        $rs = $mod->listar();
    }

    if ($acao == "listarIdsProdutos") {
        $idsProd = $mod->listarIdsProdutos();
        return $idsProd;
    }

    if ($acao == "retirarProduto") {
        return $mod->execRetirarProduto($_REQUEST['idProd']);
    }

    if ($acao == "atualizaQtdItem") {
        return $mod->execAtualizaQtdItem($_REQUEST['idProd'], $_REQUEST['qtdItem']);
    }

    if ($acao == "calcFrete") {  // mostra a listagem
        $modalidades = array('40215', '40010', '41106');
        $htm = '';
        echo $_REQUEST['pesoTotal'];
        for($cont = 0; $cont < 3; $cont++) {
            $cf = $mod->calcula_frete($modalidades[$cont], '99064-440', $_REQUEST['cep'], $_REQUEST['pesoTotal'], 's', '700', 's');
            //echo $cf->Erro.'<br/>';
            //echo $_REQUEST['CEP'];
            switch ($cf->Codigo) {
                case 40215: $servico = 'SEDEX 10';
                    break;
                case 41106: $servico = 'PAC';
                    break;
                //case 40045: $servico = 'SEDEX a Cobrar';
                    //break;
                //case 40290: $servico = 'SEDEX Hoje';
                    //break;
                default: $servico = 'SEDEX';
            }
            //echo $cf->Valor;
            $erro = (int)$cf->Erro;
            if($erro == 0) {
                $htm .= '<label class="alert alert-success col-md-12" style="padding:1px!important;">';
                    $htm .= '<input type="radio" id="entrega" name="entrega" value="'.$modalidades[$cont].'" /> '.$servico.': R$ <span class="val_frete'.$modalidades[$cont].'">'.$cf->Valor.'</span> - Prazo Estimado: <span class="prazo_frete">'.$cf->PrazoEntrega.'</span> dia(s)';
                    $htm .= '<input type="hidden" value="'.$erro.'" />';
                $htm .= '</label>';
                unset($cf);
            }
        }
        echo $htm;
        //echo $cf->Codigo;
        //echo $cf->Valor;
    }
?>
