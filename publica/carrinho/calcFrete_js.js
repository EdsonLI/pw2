$().ready(function () {  
    var totalItens = 0.0;
    $( ".tableItens" ).each(function( index ) {
        //console.log( index + ": " + $( this ).attr('id') );
        let idProd = $( this ).attr('id');
        let totItem = parseFloat($('#quantidade'+idProd).val()) * parseFloat($('span.item'+idProd).text().replace(",", "."));
        $('span.totItem'+idProd).text( totItem.toFixed(2).replace(".", ",") );
    });
    
    $( ".totalItem" ).each(function( index ) {
        //console.log( index + ": " + $( this ).text().replace(",", ".") );
        let aux = parseFloat($(this).text().replace(",", "."));
        totalItens = totalItens + aux;
        //totalItens + aux;    
        
    });
    console.info(totalItens);
    
    /*let totItem1 = parseFloat($('#quantidade1').val()) * parseFloat($('span.item1').text().replace(",", "."));
    $('span.totItem1').text( totItem1.toFixed(2).replace(".", ",") );

    let totItem2 = parseFloat($('#quantidade2').val()) * parseFloat($('span.item2').text().replace(",", "."));
    $('span.totItem2').text( totItem2.toFixed(2).replace(".", ",") );*/

    //let totItem1Item2 = parseFloat($('span.totItem1').text().replace(",", ".")) + parseFloat($('span.totItem2').text().replace(",", "."));

    $('span.valorProdutos').text( totalItens.toFixed(2).replace(".", ",") );

    //$('span.valorTotal').text($('span.valorProdutos').text());

    $(document).on('click', '.calcFrete', function (event) {
        event.preventDefault();
        let $cep = $("#CEP").val(),
            $reg = /^\d{5}(-\d{3})?$/;
        if ($cep == "") {
            $("#tipo_entrega").html('<br><label class="alert alert-danger col-md-12">Por favor informe o CEP para calcular o frete!</label>');
            return;
        }
        if (!$reg.test($cep)) {
            $("#tipo_entrega").html('<br><label class="alert alert-danger col-md-12">Por favor informe um CEP válido para calcular o frete!</label>');
            return;
        }
        $.ajax({
            url: 'calcFrete_control.php',
            dataType: 'html',
            type: 'POST',
            data: {acao: 'calcFrete', cep: $cep},
            beforeSend: function () {
                $("#tipo_entrega").html('<label class="alert alert-info col-md-12">Aguardando a resposta dos Correios...<img src="images/ring.svg" style="width:50px;height:50px;"/></label>');
            },
            success: function (dados) {
                $("#tipo_entrega").html(dados);
            }
        });
    });

    $(document).on('change', '#entrega', function() {
        //alert($('input[name=entrega]:checked').val());
        let $servico;
        switch($('input[name=entrega]:checked').val()) {
            case '41106': $servico = 'PAC';
                break;
            //case 40045: $servico = 'SEDEX a Cobrar';
                //break;
            case '40215': $servico = 'SEDEX 10';
                break;
            //case 40290: $servico = 'SEDEX Hoje';
                //break;
            default: $servico = 'SEDEX';
        }
        $('.modalidade').text(' ('+$servico+')');
        $('.precoFrete').text($('.val_frete'+$('input[name=entrega]:checked').val()).text());
        let vlrTot = parseFloat($('.valorProdutos').text().replace(",", ".")) + parseFloat($('.precoFrete').text().replace(",", "."));
        //$('.valorTotal').text( );

        $('.valorTotal').text(vlrTot.toFixed(2).replace(".", ","));
    });
    
    $('input[name="quantidade"]').on('change keyup', function() {
        $(this).each(function( index ) {
            let idProd = $( this ).attr('data-val');
            console.info('id: '+idProd+' val: '+$(this).val());
            //console.info($(this).val());
            let totIt = parseFloat($('span.item'+idProd).text().replace(",", ".")) * $(this).val();
            console.info(totIt);
            //$('span.totItem1').text(parseFloat($('span.item1').text().replace(",", ".")) * $(this).val());
            $('span.totItem'+idProd).text(totIt.toFixed(2).replace(".", ","));
            atualizaTotal();
        });
    });    

    /*$('input[name="quantidade1"]').on('change keyup', function() {
        console.info($(this).attr('id'));
        console.info($(this).val());
        let totIt1 = parseFloat($('span.item1').text().replace(",", ".")) * $(this).val();
        //$('span.totItem1').text(parseFloat($('span.item1').text().replace(",", ".")) * $(this).val());
        $('span.totItem1').text(totIt1.toFixed(2).replace(".", ","));
        atualizaTotal();
    });

    $('input[name="quantidade2"]').on('change keyup', function() {
        console.info($(this).attr('id'));
        console.info($(this).val());
        let totIt2 = parseFloat($('span.item2').text().replace(",", ".")) * $(this).val();
        //$('span.totItem2').text(parseFloat($('span.item2').text().replace(",", ".")) * $(this).val());
        $('span.totItem2').text(totIt2.toFixed(2).replace(".", ","));
        atualizaTotal();
    });*/

    function atualizaTotal() {
        totalItens = 0.00;
        $( ".totalItem" ).each(function( index ) {
            //console.log( index + ": " + $( this ).text().replace(",", ".") );
            let aux = parseFloat($(this).text().replace(",", "."));
            totalItens = totalItens + aux;
            //totalItens + aux;    

        });
        console.info(totalItens);
                        
        //let vlrProd = parseFloat($('span.totItem1').text().replace(",", ".")) + parseFloat($('span.totItem2').text().replace(",", "."));
        //$('span.valorProdutos').text(parseFloat($('span.totItem1').text().replace(",", ".")) + parseFloat($('span.totItem2').text().replace(",", ".")));
        $('span.valorProdutos').text(totalItens.toFixed(2).replace(".", ","));

        if(parseFloat($('.precoFrete').text().replace(",", ".")) > 0.00) {
            let vlrTot = parseFloat($('span.ValorProdutos').text().replace(",", ".")) + parseFloat($('span.precoFrete').text().replace(",", "."));
            //$('span.valorTotal').text(parseFloat($('span.ValorProdutos').text().replace(",", ".")) + parseFloat($('span.precoFrete').text().replace(",", ".")));
            $('span.valorTotal').text(vlrTot.toFixed(2).replace(".", ","));
        } /*else {
            $('span.valorTotal').text($('span.valorProdutos').text());
        }*/
    }

});
