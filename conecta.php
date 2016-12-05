<?php
    require 'adodb5/adodb.inc.php';

    class Conecta {
        var $bd;
        public function __construct() {
            $this->bd = ADONewConnection("postgres");
            $this->bd->debug = false;
            $this->bd->Connect("host=localhost port=5433 dbname=pw2 user=postgres password=123");
        }

        public function getBd(){
            return $this->bd;
        }
    }

/* Script de criação do BD e da tabela do projeto */
/*
 *  CREATE DATABASE bancopw2;
 *
 *  CREATE TABLE carros (
 *     id serial NOT NULL,
 *     marca character varying(250) NOT NULL,
 *     modelo character varying(250) NOT NULL,
 *     ano integer NOT NULL,
 *     CONSTRAINT id PRIMARY KEY (id)
 *  )
 *
 *  */

?>
