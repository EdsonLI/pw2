$().ready(function() {

    //--------------------LINK EXCLUIR--------------------------
    $(document).on('click', '.calcFrete', function(event) {
        event.preventDefault();
        $cep = $("#CEP").val();
        if($cep == "") {
            $("#tipo_entrega").html('<br><label class="alert alert-danger">Por favor informe um CEP válido para calcular o frete!</label>');
            return;
        }
        $.ajax({
           url: 'calcFrete_control.php',
           dataType: 'html',
           type: 'POST',
           data: { acao: 'calcFrete', cep: $cep  },
           success: function(dados) {
               //console.info('obteve retorno do calcFrete');
               //console.info('retorno: ', dados);
               //console.info($("#CEP").val());
               $("#tipo_entrega").html(dados);
           }
        });
    });
});
