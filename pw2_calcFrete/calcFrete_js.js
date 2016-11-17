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
               data: { acao: 'calcFrete' },
               success: function(dados) {
                   console.info('obteve retorno do calcFrete');
                   console.info('retorno: ', dados);
//                   self.closest("tr").remove();
//                   $("#mensagem").html("Você excluiu o carro: "+marca+' - '+modelo);
//                   openModalMsg();
//                   setTimeout(closeModalMsg, 3000);
                   //limpar();
               }
            });  
//        }
    });
});