<?php
    include_once('../../config.php');
    include('calcFrete_control.php');
    //echo "teste";
    //echo $mod->getPeso(4);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>E-Commerce | Programação Web 2</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.12.1.custom/jquery-ui.min.js" type="text/javascript"></script>
        <link href="scripts/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <!--<link type="text/css" rel="stylesheet" href="css/principal.css">-->
        <!--<link type="text/css" rel="stylesheet" href="css/carrinho.css">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="justified-nav.css" rel="stylesheet">-->
        <script src="scripts/bootstrap.min.js" type="text/javascript"></script>
        <script src="calcFrete_js.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>E-Commerce | PW2 | Carrinho de Compras</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <div class="table-responsive"> 
                <div class="col-lg-6">
                    <strong>Produtos</strong>
                </div>
                <div class="col-lg-2 text-center">
                    <strong>Quantidade</strong>
                </div>
                <div class="col-lg-2 text-center">
                    <strong>Valor unitário</strong>
                </div>
                <div class="col-lg-2 text-center">
                    <strong>Valor total</strong>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <?php
                while (!$rs->EOF) { ?>
                    <table class="table tableItens" id="<?=$rs->fields['pro_id'];?>">
                        <div class="col-lg-6" style="height:50px;top:-10px;">
                            <img src="images/12753581_1GG.jpg" class="img-thumbnail" width="75" height="75" alt=""/>
                            <span><?=$rs->fields['pro_descricao'];?></span>
                        </div>
                        <div class="col-lg-2 text-center" style="top:5px;">
                            <input id="quantidade<?=$rs->fields['pro_id'];?>" size="2" name="quantidade" data-val="<?=$rs->fields['pro_id'];?>" style="width:50px;padding-left:5px;" min="1" max="99" step="1" type="number" value="<?=$rs->fields['cite_qtd'];?>">
                            <input type="hidden" id="peso<?=$rs->fields['pro_id'];?>" class="peso" data-val="<?=$rs->fields['pro_peso'];?>" value="<?=$rs->fields['pro_peso']*$rs->fields['cite_qtd'];?>">
                            <br>
                            <button type="button" class="btn btn-link btn-sm">Retirar do Carrinho</button>
                        </div>                        
                        <div class="col-lg-2 text-center" style="top:15px;">
                            R$ <span class="item<?=$rs->fields['pro_id'];?>"><?=$rs->fields['pro_valor'];?></span>
                        </div>
                        <div class="col-lg-2 text-center" style="top:15px;">
                            R$ <span class="totalItem totItem<?=$rs->fields['pro_id'];?>">0,00</span>
                        </div>
                    </table>
                <hr>
            <?php $rs->MoveNext(); } ?>            
<!--            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>-->
            <div class="table">
                <div class="col-lg-6 text-left">
                    <div class="well btn-group text-left">
                        <a4>Simule o prazo de entrega e o frete para seu CEP (Peso <span class="pesoTotal">0.9</span> kg):</a4><br><br>
                        <div class="input-group">
                            <input type="text" class="form-control" size="10" maxlength="9" name="CEP" id="CEP" placeholder="Informe o CEP (formato: 99150-000)">
                            <span class="input-group-btn">
                                <button class="btn btn-default calcFrete" type="button">Calcular!</button>
                            </span>
                        </div>
                        <br/>
                        <div id="tipo_entrega">
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center"></div>
                <div class="col-lg-5 text-right">
                    <table class="table well">
                        <tr>
                            <td colspan="2" class="text-right">
                                Valor total dos produtos:
                            </td>
                            <td class="text-right">
                                R$
                            </td>  
                            <td class="text-right">
                                <b><span class="valorProdutos">0,00</span></b>
                            </td> 
                        </tr>
                        <tr>
                            <td colspan="2" class="text-right">
                                Valor do envio<span class="modalidade"></span>:
                            </td>
                            <td class="text-right">
                                R$
                            </td>  
                            <td class="text-right">
                                <b><span class="precoFrete"> -------- </span></b>
                            </td> 
                        </tr>
                        <tr>
                            <td colspan="2" class="text-right">
                                <b>Valor total (produtos + envio):</b> 
                            </td>
                            <td class="text-right">
                                <b>R$</b>
                            </td>  
                            <td class="text-right">
                                <b><span class="valorTotal"> -------- </span></b>
                            </td> 
                        </tr>
                    </table>                    
                </div>
                
<!--                <div class="col-lg-5 text-right">
                    Valor Total dos Produtos:
                </div>
                <div class="col-lg-2 text-right">
                    <b>R$ <span class="valorProdutos">398,00</span></b>
                </div>-->
            </div>
<!--            <div class="table">
                <div class="col-lg-5 text-left">

                </div>
                <div class="col-lg-5 text-right">
                    Valor da Entrega<span class="modalidade"></span>:<br>
                </div>
                <div class="col-lg-2 text-right">
                    <b>R$ <span class="precoFrete"> -------- </span></b>
                </div>
                <div class="col-lg-7 text-right">
                    <del>-------------</del>
                </div>
                <div class="col-lg-5 text-right">
                    Valor Total a Pagar:
                </div>
                <div class="col-lg-2 text-right">
                    <b>R$ <span class="valorTotal"> -------- </span></b>
                </div>                                                
            </div>-->
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <div class="row">                                           
                <div class="col-lg-4 text-left">
                    <button type="button" class="btn btn-primary btn-md">ESCOLHER MAIS PRODUTOS</button>
                </div>
                <div class="col-lg-4">
                    <h2></h2>
                </div>
                <div class="col-lg-4 text-right">
                    <button type="button" class="btn btn-success btn-md">IR PARA PAGAMENTO</button>
                </div>
            </div>
        </div> <!-- /container -->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
    </body>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <div class="info text-center">
                E-Commerce | PW2
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
        </div>
    </footer>

</html>
