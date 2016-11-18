<?php include_once('calcFrete_control.php'); ?>
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
                <div class="col-lg-6">
                    <h2>E-Commerce | PW2</h2>
                </div>
            </div><!-- /.row -->
            <!--            <div class="row">
                            <div class="col-lg-12">
                                <hr>
                            </div>
                        </div>-->
            <!--            <div class="row">
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-default btn-lg">Continue Comprando</button>
                            </div>
                            <div class="col-lg-4">
                                <h2></h2>
                            </div>
                            <div class="col-lg-4 text-right">
                                <button type="button" class="btn btn-primary btn-lg">Finalizar Pedido</button>
                            </div>
                        </div>-->
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <div class="table">
                <div class="col-lg-9">
                    Produtos
                </div>
                <div class="col-lg-1 text-center">
                    Valor Unit.
                </div>
                <div class="col-lg-1 text-center">
                    Quantidade
                </div>
                <div class="col-lg-1 text-center">
                    Total
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <table class="table">
                <div class="col-lg-9">
                    <img src="images/12753581_1GG.jpg" class="img-thumbnail" width="75" height="75" alt=""/>
                </div>
                <div class="col-lg-1 text-center text-center">
                    R$ 199,00
                </div>
                <div class="col-lg-1 text-center">
                    <input type="text" size="2" name="quantidade">
                </div>
                <div class="col-lg-1 text-center">
                    R$ 199,00
                </div>
            </table>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <table class="table">
                <div class="col-lg-9">
                    <img src="images/11765725_1GG.jpg" class="img-thumbnail" width="75" height="75" alt=""/>
                </div>
                <div class="col-lg-1 text-center text-center">
                    R$ 199,00
                </div>
                <div class="col-lg-1 text-center">
                    <input size="2" name="quantidade" style="width:50px" min="0" max="99" step="1" type="number" value="1">
                </div>
                <div class="col-lg-1 text-center">
                    R$ 199,00
                </div>
            </table>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <div class="table">
                <div class="col-lg-5 text-left">
                    <div class="well btn-group">
                        <a4>Calculo do Valor da Entrega:</a4><br><br>
                        <div class="input-group">
                           <input type="text" class="form-control" size="10" name="CEP" id="CEP" placeholder="Informe o CEP (formato: 99150-000)">
                           <span class="input-group-btn">
                              <button class="btn btn-default calcFrete" type="button">Calcular!</button>
                           </span>
                        </div>
                        <br/>
                        <div id="tipo_entrega">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    Valor Total dos Produtos:
                </div>
                <div class="col-lg-2 text-right">
                    <b>R$ 398,00</b>
                </div>
            </div>
            <div class="table">
                <div class="col-lg-5 text-left">

                </div>
                <div class="col-lg-5 text-right">
                    Valor da Entrega<span class="modalidade"></span>:<br>
                </div>
                <div class="col-lg-2 text-right">
                    <b>R$ <span class="precoFrete"> -- </span></b>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-4">
                    <h2></h2>
                </div>
                <div class="col-lg-4 text-right">
                    <button type="button" class="btn btn-primary btn-lg">Finalizar Pedido</button>
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
                PW2 - Contato via Email
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
        </div>
    </footer>

</html>
