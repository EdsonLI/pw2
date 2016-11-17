$().ready(function() {

    //--------------------LINK EXCLUIR--------------------------
    $(document).on('click', '.calcFrete', function(event) {
        event.preventDefault();
        let $cep = $("#CEP").val(),
            $reg = /^\d{5}(-\d{3})?$/;
        if($cep == "") {
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
           data: { acao: 'calcFrete', cep: $cep  },
           beforeSend: function() {
              $("#tipo_entrega").html('<br><label class="alert alert-info col-md-12">Aguardando a resposta dos Correios. Muita calma nessa hora!</label>');
           },
           success: function(dados) {
               //console.info('obteve retorno do calcFrete');
               //console.info('retorno: ', dados);
               //console.info($("#CEP").val());
               $("#tipo_entrega").html(dados);
           }
        });
    });
});
