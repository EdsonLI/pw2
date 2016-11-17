<?php
    class CalcFrete {
        //private $con, $bd; // para conexao
        //private $sql; // para os comandos SQL
        //private $res; // para resultado dos SQLs
        //private $ordem; // para ordenacao da consulta
        //private $totalPag; // para total de paginas
        //private $pag; // numero da pagina atual

        // metodo construtor
        public function __construct() {
            echo "chamou o construtor";
            //$this->con = new Conecta();
            //$this->bd = $this->con->getBd();
            //$this->ordem = "modelo";            
        }
        
        public function calcula_frete($servico, $cep_origem, $cep_destino, $peso, $mao_propria, $valor_declarado, $aviso_recebimento) {
            $mao_propria = (strtolower($mao_propria) == 's') ? 's' : 'n';
            $aviso_recebimento = (strtolower($aviso_recebimento) == 's') ? 's' : 'n';
            $url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCepOrigem=' . $cep_origem . '&sCepDestino=' . $cep_destino . '&nVlPeso=' . $peso . '&nCdFormato=1&nVlComprimento=20&nVlAltura=5&nVlLargura=15&sCdMaoPropria=' . $mao_propria . '&nVlValorDeclarado=' . $valor_declarado . '&sCdAvisoRecebimento=' . $aviso_recebimento . '&nCdServico=' . $servico . '&nVlDiametro=0&StrRetorno=xml';
            $frete_calcula = simplexml_load_string(file_get_contents($url));
            /*
              CASO QUEIRA VER TUDO QUE VEM DO SITE DOS CORREIOS, DESCOMENTE A LINHA ABAIXO.
             */
            //echo print_r($frete_calcula);
            //echo '<br/><br/>';
            $frete = $frete_calcula->cServico;
            if ($frete->Erro == '0') {
                switch ($frete->Codigo) {
                    case 41106: $servico = 'PAC';
                        break;
                    //case 40045: $servico = 'SEDEX a Cobrar';
                        //break;
                    case 40215: $servico = 'SEDEX 10';
                        break;
                    //case 40290: $servico = 'SEDEX Hoje';
                        //break;
                    default: $servico = 'SEDEX';
                }
                $retorno = 'Serviços: ' . $servico . '<br>';
                $retorno .= 'Valor: ' . $frete->Valor . '<br>';
                $retorno .= 'Prazo de entrega: ' . $frete->PrazoEntrega . ' dia(s)';
            } elseif ($frete->Erro == '7') {
                $retorno = 'Serviço temporariamente indisponível, tente novamente mais tarde.';
            } else {
                $retorno .= ($frete->Erro == '8') ? 'Serviço indisponível para a localidade informada' : 'Erro na operação de cálculo do frete! Código do erro: '.$frete->Erro;
            }
            return $frete_calcula;
        }
               
        function __destruct() {
            echo "chamou o destrutor";
        }
    }
?>