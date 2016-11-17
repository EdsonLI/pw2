$().ready(function() {

    //--------------------LINK EXCLUIR--------------------------
    $(document).on('click', '.calcFrete', function(event) {
        event.preventDefault();
        console.info('chamou o calcFrete');

//        $confirmaExcCarro = true;
//
//        if($confirmaExcCarro == true) {
            $.ajax({
               url: 'calcFrete_control.php',
               dataType: 'html',
               type: 'POST',
               data: { acao: 'calcFrete', cep: $("#CEP").val()  },
               success: function(dados) {
                   console.info('obteve retorno do calcFrete');
                   console.info('retorno: ', dados);
                   console.info($("#CEP").val());
//                   self.closest("tr").remove();
                   $("#tipo_entrega").html(dados);
//                   openModalMsg();
//                   setTimeout(closeModalMsg, 3000);
                   //limpar();
               }
            });
//        }
    });
});
