<?php
    include_once('../../config.php');
    include_once('./pedido_control.php');
    
    
    $pedido = new finalizaPedido();
    
    $pedido->listar();
    $pedido->gerarPedido(597.00, 34.80, 3);

