$().ready(function () {
    var $totalItens = 0.0,
        $pesoTotal = 0.0;
        
//    $( ".tableItens" ).each(function( index ) {
//        let idProd = $( this ).attr('id');
//        let totItem = parseFloat($('#quantidade'+idProd).val()) * parseFloat($('span.item'+idProd).text().replace(",", "."));
//        $('span.totItem'+idProd).text( totItem.toFixed(2).replace(".", ",") );
//    });
//
//    $( ".totalItem" ).each(function( index ) {
//        let aux = parseFloat($(this).text().replace(",", "."));
//        $totalItens = $totalItens + aux;
//
//    });
//    console.info($totalItens);
//
//    $( ".peso" ).each(function( index ) {
//        $pesoTotal = $pesoTotal + parseFloat($(this).val());
//    });
//    console.info($pesoTotal);  
//
//    $('span.valorProdutos').text( $totalItens.toFixed(2).replace(".", ",") );
//    $('span.pesoTotal').text( $pesoTotal.toFixed(2).replace(".", ",") );
//
//    $('#CEP').keyup(function () {
//        let $re = new RegExp("[0-9]{5}-[0-9]{3}");
//        if ($(this).val().length == 5) {
//            $(this).val($(this).val()+'-');
//        } else if ($(this).val().length == this.maxLength) {
//            if($re.test($(this).val())) {
//                $('.calcFrete').focus();
//            } else {
//                $("#tipo_entrega").html('<br><label class="alert alert-danger col-md-12">Por favor informe um CEP válido para calcular o valor do envio!</label>');
//                return;
//            }
//        }
//    });
//
//    $(document).on('click', '.calcFrete', function (event) {
//        event.preventDefault();
//        let $cep = $("#CEP").val(),
//            $reg = /^\d{5}(-\d{3})?$/,
//            $pesTot = $pesoTotal.toFixed(2);
//        if ($cep == "") {
//            $("#tipo_entrega").html('<br><label class="alert alert-danger col-md-12">Por favor informe o CEP para calcular o valor do envio!</label>');
//            return;
//        }
//        if (!$reg.test($cep)) {
//            $("#tipo_entrega").html('<br><label class="alert alert-danger col-md-12">Por favor informe um CEP válido para calcular o valor do envio!</label>');
//            return;
//        }
//        $.ajax({
//            url: 'calcFrete_control.php',
//            dataType: 'html',
//            type: 'POST',
//            data: {acao: 'calcFrete', cep: $cep, pesoTotal: $pesTot},
//            beforeSend: function () {
//                $("#tipo_entrega").html('<label class="alert alert-info col-md-12">Aguardando a resposta dos Correios...<img src="images/ring.svg" style="width:50px;height:50px;"/></label>');
//                $('span.precoFrete').text('--------');
//                $('span.valorTotal').text('--------');
//            },
//            success: function (dados) {
//                $("#tipo_entrega").html(dados);
//            }
//        });
//    });
//
//    $(document).on('change', '#entrega', function() {
//        let $servico;
//        switch($('input[name=entrega]:checked').val()) {
//            case '41106': $servico = 'PAC';
//                break;
//            //case 40045: $servico = 'SEDEX a Cobrar';
//                //break;
//            case '40215': $servico = 'SEDEX 10';
//                break;
//            //case 40290: $servico = 'SEDEX Hoje';
//                //break;
//            default: $servico = 'SEDEX';
//        }
//        $('.modalidade').text(' ('+$servico+')');
//        $('.precoFrete').text($('.val_frete'+$('input[name=entrega]:checked').val()).text());
//        let vlrTot = parseFloat($('.valorProdutos').text().replace(",", ".")) + parseFloat($('.precoFrete').text().replace(",", "."));
//
//        $('.valorTotal').text(vlrTot.toFixed(2).replace(".", ","));
//        $('.gotofinalizar').removeAttr("disabled");
//    });
//
//    $('input[name="quantidade"]').on('change keyup', function() {
//        $(this).each(function( index ) {
//            $('.gotofinalizar').prop("disabled", true);
//            let idProd = $( this ).attr('data-val');
//            console.info('id: '+idProd+' val: '+$(this).val());
//            let totIt = parseFloat($('span.item'+idProd).text().replace(",", ".")) * $(this).val();
//            console.info(totIt);
//            $('span.totItem'+idProd).text(totIt.toFixed(2).replace(".", ","));
//            let pesoIt = parseFloat($('#peso'+idProd).attr('data-val')) * $(this).val();
//            $('#peso'+idProd).val(pesoIt.toFixed(2));
//            $pesoTotal = 0.0;
//            $( ".peso" ).each(function( index ) {
//                $pesoTotal = $pesoTotal + parseFloat($(this).val());
//            });
//            console.info($pesoTotal.toFixed(2));
//            $('span.pesoTotal').text( $pesoTotal.toFixed(2).replace(".", ",") );
//            atualizaTotal();
//        });
//    });
//
//    $('.retirar_produto').on('click', function() {
//        event.preventDefault();
//        let $idProd = $(this).attr('data-val');
//        $('.confirma_exclui_item').attr("data-val", $idProd);
//    });
//
//    $('.confirma_exclui_item').on('click', function() {
//        event.preventDefault();
//        ajxExclusaoItem($(this).attr('data-val'));
//    });
//    
//    $('.finalizar_compra').on('click', function(){
//        event.preventDefault();
//        ajxFinalizaPedido();
//    });
//
//    function ajxExclusaoItem($id_produto) {
//        $.ajax({
//            url: 'calcFrete_control.php',
//            //dataType: 'html',
//            type: 'POST',
//            data: {acao: 'retirarProduto', idProd: $id_produto},
//            beforeSend: function () {
//                $("#tipo_entrega").html('<label class="alert alert-info col-md-12">Recalculando valor do Frete...<img src="images/ring.svg" style="width:50px;height:50px;"/></label>');
//            },
//            success: function (dados) {
//                $("#mensagem").html("OK! Item retirado do carrinho!");
//                openModalMsg();
//                $(".div"+$id_produto).remove();
//                $pesoTotal = 0.0;
//                $( ".peso" ).each(function( index ) {
//                    $pesoTotal = $pesoTotal + parseFloat($(this).val());
//                });
//                console.info($pesoTotal.toFixed(2));
//                $('span.pesoTotal').text( $pesoTotal.toFixed(2).replace(".", ",") );
//                atualizaTotal();
//                setTimeout(closeModalMsg, 3000);
//                console.info('retorno retirarProduto: ', dados);
//            }
//        });
//    }
//
//    function atualizaTotal() {
//        $totalItens = 0.00;
//        $( ".totalItem" ).each(function( index ) {
//            let aux = parseFloat($(this).text().replace(",", "."));
//            $totalItens = $totalItens + aux;
//
//        });
//        console.info($totalItens);
//
//        $('span.valorProdutos').text($totalItens.toFixed(2).replace(".", ","));
//
//        let $cep = $("#CEP").val(),
//            $reg = /^\d{5}(-\d{3})?$/,
//            $pesTot = $pesoTotal.toFixed(2);
//
//        setTimeout(auxAtualizaTotal($cep, $reg, $pesTot), 3000);
//    }
//
//    function auxAtualizaTotal($cep, $reg, $pesTot) {
//        if($totalItens <= 0.00) {
//            $("#tipo_entrega").html('<br><label class="alert alert-danger col-md-12">Não há itens no seu carrinho!</label>');
//            return;
//        } else if ($cep == "") {
//            $("#tipo_entrega").html('<br><label class="alert alert-danger col-md-12">Por favor informe o CEP para calcular o valor do envio!</label>');
//            return;
//        } else if (!$reg.test($cep)) {
//            $("#tipo_entrega").html('<br><label class="alert alert-danger col-md-12">Por favor informe um CEP válido para calcular o valor do envio!</label>');
//            return;
//        } else {
//            $.ajax({
//                url: 'calcFrete_control.php',
//                dataType: 'html',
//                type: 'POST',
//                data: {acao: 'calcFrete', cep: $cep, pesoTotal: $pesTot},
//                beforeSend: function () {
//                    $("#tipo_entrega").html('<label class="alert alert-info col-md-12">Recalculando valor do Frete...<img src="images/ring.svg" style="width:50px;height:50px;"/></label>');
//                },
//                success: function (dados) {
//                    $("#tipo_entrega").html(dados);
//                }
//            });
//            $('span.precoFrete').text('--------');
//            $('span.valorTotal').text('--------');
//        }
//    }
//
//    function openModalMsg() {
//        $('#myModalMsg').modal('show');
//    }
//
//    function closeModalMsg() {
//        $('#myModalMsg').modal('hide');
//    }

});
