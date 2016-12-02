<?php //arquivo de conexão com o banco de dados
    require('adodb5/adodb.inc.php');

    class Conecta {
        var $bd;  //atributo da classe
        function __construct(){
            $this->bd=ADONewConnection(config_banco); //cria a conexão com o banco de dados
            $this->bd->dialect=3; //define a versão do o dialeto do sql suportado
            $this->bd->debug=true; //aciona o debug dos comandos sql que serão exibidos
            $this->bd->Connect("host=localhost port=5432 dbname=pw2 user=postgres password=123");
        }

        public function getBd() {
            return $this->bd;
        }
    } //fechamento da classe

/* UTILIZAMOS OS COMANDOS ABAIXO PARA TESTAR SE A CONEXÃO ESTÁ ESTABELECIDA COM SUCESSO.
  if($con = new conecta())
    echo 'Conectado com sucesso!';
  else
    echo $con->ErrorMsg();*/
?>
