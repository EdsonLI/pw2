<?php
    class CalcFrete {

        private $con, $bd; // para conexao
        private $sql; // para os comandos SQL
        private $res; // para resultado dos SQLs

        // metodo construtor
        public function __construct() {
            $this->con = new Conecta();
            $this->bd = $this->con->getBd();
        }

        public function calcula_frete($servico, $cep_origem, $cep_destino, $peso, $mao_propria, $valor_declarado, $aviso_recebimento) {
            //echo $cep_destino;
            $mao_propria = (strtolower($mao_propria) == 's') ? 's' : 'n';
            $aviso_recebimento = (strtolower($aviso_recebimento) == 's') ? 's' : 'n';
            $url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCepOrigem='.$cep_origem.'&sCepDestino='.$cep_destino.'&nVlPeso='.$peso.'&nCdFormato=1&nVlComprimento=20&nVlAltura=5&nVlLargura=15&sCdMaoPropria='.$mao_propria.'&nVlValorDeclarado='.$valor_declarado.'&sCdAvisoRecebimento='.$aviso_recebimento.'&nCdServico='.$servico.'&nVlDiametro=0&StrRetorno=xml';
            $frete_calcula = simplexml_load_string(file_get_contents($url));

            $frete = $frete_calcula->cServico;

            return $frete;
        }

        public function getPeso($id_produto) {
            $this->sql = "SELECT pro.pro_peso
                            FROM produtos pro, cesta_itens cesit
                           WHERE cesit.ces_sessao = 'l9pl5sag3ho56ktamlm1nj7af6'
                             AND cesit.pro_id = pro.pro_id
                             AND pro.pro_id = $id_produto";

            $this->res = $this->bd->Execute($this->sql);
            return $this->res;
        }

        function __destruct() {
            //echo "chamou o destrutor";
        }
    }
?>
