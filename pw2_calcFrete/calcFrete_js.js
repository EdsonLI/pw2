$().ready(function () {

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
                $("#tipo_entrega").html('<br><label class="alert alert-info col-md-12">Aguardando a resposta dos Correios. Muita calma nessa hora!</label>');
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
        //console.info( parseFloat( $('.precoFrete').text().replace(",", ".") ) );
        $('.valorTotal').text(parseFloat($('.valorProdutos').text().replace(",", ".")) + parseFloat($('.precoFrete').text().replace(",", ".")) );

        $('.valorTotal').text($('.valorTotal').text().replace(".", ","));
    });
    
    $( "li" ).each(function( index ) {
      console.log( index + ": " + $( this ).text() );
    });    
    
//    $("input[type='number']").bind("focus", function() {
//        var value = $(this).val();
//        $(this).bind("blur", function() {
//            if(value != $(this).val()) {
//                alert("Value changed");
//            }
//            $(this).unbind("blur");
//        });
//    });
    
    $('input[name="quantidade"]').on('change keyup', function() {
        console.info($(this).attr('id'));
        var spanVal = $(this).next('span').text();
        console.info(spanVal);
        console.info($(this).val());
    });
    
});
