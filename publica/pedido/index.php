<?php
include_once('pedido_class.php');
//include_once('../conexao/conecta.php');
//include_once('cesta_compras_control.php');
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

        <title>E-Commerce | Programação Web 2 | Finalizar as Compras</title>
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
                    <h2>E-Commerce | PW2 | Finalizar as Compras</h2>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table grid">
                    <tr>
                        <td colspan="6" class="text-center">
                            <table class="table well">
                                <tr>
                                    <td colspan="6" class="text-left">
                                        <h3><b>Resumo das Compras</b></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Valor dos Produtos:
                                    </td>
                                    <td colspan="4" class="text-left">
                                        <b>R$ 695,00</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Valor do Frete:
                                    </td>
                                    <td colspan="4" class="text-left">
                                        <b>R$ 32,50</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        <b>Valor Total:</b>
                                    </td>
                                    <td colspan="4" class="text-left">
                                        <b>R$ 727,50</b>
                                    </td>
                                </tr>
                            </table>
                            <table class="table well">
                                <tr>
                                    <td colspan="6" class="text-left">
                                        <h3><b>Informações de Pagamento</b></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <img src="images/iconesCartoes.jpeg" alt=""/>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-right">
                                        Nome (Como está no Cartão):
                                    </td>
                                    <td colspan="3" class="text-left">
                                        <input type="text" name="nome_cartao" size="20">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-right">
                                        Número do Cartão:
                                    </td>
                                    <td colspan="3" class="text-left">
                                        <input type="text" name="numero_cartao" size="25">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-right">
                                        Validade do Cartão:
                                    </td>
                                    <td colspan="3" class="text-left">
                                        <select name=mes>
                                            <option selected disabled>Mês</option>
                                            <option value=01>01</option>
                                            <option value=02>02</option>
                                            <option value=03>03</option>
                                            <option value=04>04</option>
                                            <option value=05>05</option>
                                            <option value=06>06</option>
                                            <option value=07>07</option>
                                            <option value=08>08</option>
                                            <option value=09>09</option>
                                            <option value=10>10</option>
                                            <option value=11>11</option>
                                            <option value=12>12</option>
                                        </select>
                                        <select name=ano>
                                            <option selected disabled>Ano</option>
                                            <option value=16>16</option>
                                            <option value=17>17</option>
                                            <option value=18>18</option>
                                            <option value=19>19</option>
                                            <option value=20>20</option>
                                            <option value=21>21</option>
                                            <option value=22>22</option>
                                            <option value=23>23</option>
                                            <option value=24>24</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-right">
                                        Código de Segurança:
                                    </td>
                                    <td colspan="3" class="text-left">
                                        <input type="text" name="cod_seg_cartao" size="5">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-right">
                                        <button type="button" class="btn btn-warning btn-md">FINALIZAR O PAGAMENTO</button>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="6" class="text-center">
                            <table class="table well">
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <h3><b>Entrega</b></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-right">
                                        Endereço:
                                    </td>
                                    <td colspan="3" class="text-left">
                                        Av Flores da Cunha, 5665
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-right">
                                        Cidade:
                                    </td>
                                    <td colspan="3" class="text-left">
                                        Carazinho - RS
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-right">
                                        
                                    </td>
                                    <td colspan="3" class="text-right">
                                        <button type="button" class="btn btn-link btn-md">Alterar</button>
                                    </td>
                                </tr>
                            </table>
                        </td>  
                    </tr>
                </table>
            </div>
        </div> <!-- /container -->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
    </body>
</html>

