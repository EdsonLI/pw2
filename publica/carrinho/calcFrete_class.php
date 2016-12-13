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

        public function listar() {
            $this->sql = "SELECT pro.pro_id,
                                 pro.pro_descricao,
                                 pro.pro_valor,
                                 pro.pro_peso,
                                 cesit.cite_qtd
                            FROM produtos pro, cesta_itens cesit
                           WHERE cesit.ces_sessao = 'l9pl5sag3ho56ktamlm1nj7af6'
                             AND cesit.pro_id = pro.pro_id";

            //echo $this->sql;

            $this->res = $this->bd->Execute($this->sql);
            return $this->res;
        }

        public function listarIdsProdutos() {
            $this->sql = "SELECT pro.pro_id
                            FROM produtos pro, cesta_itens cesit
                           WHERE cesit.ces_sessao = 'l9pl5sag3ho56ktamlm1nj7af6'
                             AND cesit.pro_id = pro.pro_id";

            //echo $this->sql;

            $this->res = $this->bd->Execute($this->sql);
            while (!$this->res->EOF) {
                $idProd[] = $this->res->fields['pro_id'];
                $this->res->MoveNext();
            }
            echo $idProd;
            //return json_encode($idProd);
        }

        public function execRetirarProduto($id_produto) {
            $this->sql = "DELETE FROM cesta_itens cesit
                           WHERE cesit.ces_sessao = 'l9pl5sag3ho56ktamlm1nj7af6'
                             AND cesit.pro_id = $id_produto";

            echo $this->sql;

            //$this->res = $this->bd->Execute($this->sql);
            return $this->res;
        }

        public function execAtualizaQtdItem($id_produto, $qtd_item) {
            $this->sql = "UPDATE cesta_itens
                             SET cite_qtd = $qtd_item
                           WHERE ces_sessao = 'l9pl5sag3ho56ktamlm1nj7af6'
                             AND pro_id = $id_produto";

            #echo $this->sql;

            $this->res = $this->bd->Execute($this->sql);
            return $this->res;
        }

        public function getPeso($id_produto) {
            $this->sql = "SELECT pro.pro_peso
                            FROM produtos pro, cesta_itens cesit
                           WHERE cesit.ces_sessao = 'l9pl5sag3ho56ktamlm1nj7af6'
                             AND cesit.pro_id = pro.pro_id
                             AND pro.pro_id = $id_produto";

            //echo $this->sql;

            $this->res = $this->bd->Execute($this->sql);
            return $this->res->fields['pro_peso'];
        }

        function __destruct() {
            //echo "chamou o destrutor";
        }
    }
?>
