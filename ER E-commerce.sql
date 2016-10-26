CREATE TABLE Categorias (
 cat_id INT NOT NULL,
 cat_descricao VARCHAR(50) NOT NULL
);

ALTER TABLE Categorias ADD CONSTRAINT PK_Categorias PRIMARY KEY (cat_id);


CREATE TABLE Cidades (
 cid_id INT NOT NULL,
 cid_nome VARCHAR(50) NOT NULL,
 cid_uf CHAR(2) NOT NULL
);

ALTER TABLE Cidades ADD CONSTRAINT PK_Cidades PRIMARY KEY (cid_id);


CREATE TABLE Clientes (
 cli_id INT NOT NULL,
 cli_nome VARCHAR(50) NOT NULL,
 cli_cpf CHAR(11) NOT NULL,
 cli_endereco VARCHAR(50) NOT NULL,
 cli_email VARCHAR(100) NOT NULL,
 cli_sexo CHAR(1) NOT NULL,
 cli_bairro VARCHAR(50) NOT NULL,
 cli_cep VARCHAR(10) NOT NULL,
 cli_fone1 VARCHAR(15) NOT NULL,
 cli_fone2 VARCHAR(15),
 cli_datanasc DATE NOT NULL,
 cli_status CHAR(1) NOT NULL,
 cli_maladireta CHAR(1),
 cid_id INT NOT NULL,
 cli_tipo CHAR(1) NOT NULL,
 cli_senha VARCHAR(300) NOT NULL
);

ALTER TABLE Clientes ADD CONSTRAINT PK_Clientes PRIMARY KEY (cli_id);


CREATE TABLE Pedidos (
 ped_id INT NOT NULL,
 ped_data DATE NOT NULL,
 ped_hora TIME(10) NOT NULL,
 ped_total DECIMAL(10,2),
 ped_frete DECIMAL(10,2),
 ped_tipopag CHAR(1) NOT NULL,
 ped_status CHAR(1) NOT NULL,
 ped_dataenvio DATE,
 cli_id INT NOT NULL,
 ped_tipofrete CHAR(1),
 ped_endereco VARCHAR(50),
 ped_bairro VARCHAR(50),
 ped_cep CHAR(10),
 cid_id INT
);

ALTER TABLE Pedidos ADD CONSTRAINT PK_Pedidos PRIMARY KEY (ped_id);


CREATE TABLE Produtos (
 pro_id INT NOT NULL,
 pro_descricao VARCHAR(50) NOT NULL,
 pro_valor DECIMAL(10,2) NOT NULL,
 pro_detalhes VARCHAR(500) NOT NULL,
 pro_estoque INT,
 pro_peso DECIMAL(5,2),
 pro_promocao DECIMAL(10,2),
 cat_id INT NOT NULL,
 pro_dimensao CHAR(10),
 pro_numeracao CHAR(10)
);

ALTER TABLE Produtos ADD CONSTRAINT PK_Produtos PRIMARY KEY (pro_id);


CREATE TABLE Usuarios (
 usu_id INT NOT NULL,
 usu_nome VARCHAR(50),
 usu_senha VARCHAR(50)
);

ALTER TABLE Usuarios ADD CONSTRAINT PK_Usuarios PRIMARY KEY (usu_id);


CREATE TABLE Cesta (
 ces_sessao VARCHAR(30) NOT NULL,
 ces_data DATE NOT NULL,
 ces_hora TIME(10) NOT NULL,
 cli_id INT
);

ALTER TABLE Cesta ADD CONSTRAINT PK_Cesta PRIMARY KEY (ces_sessao);


CREATE TABLE Cesta_itens (
 ces_sessao VARCHAR(30) NOT NULL,
 pro_id INT NOT NULL,
 cite_qtd INT NOT NULL,
 cite_valor DECIMAL(10,2) NOT NULL
);

ALTER TABLE Cesta_itens ADD CONSTRAINT PK_Cesta_itens PRIMARY KEY (ces_sessao,pro_id);


CREATE TABLE Pedidos_itens (
 ped_id INT NOT NULL,
 pro_id INT NOT NULL,
 ite_qtd INT NOT NULL,
 ite_valor DECIMAL(10,2) NOT NULL
);

ALTER TABLE Pedidos_itens ADD CONSTRAINT PK_Pedidos_itens PRIMARY KEY (ped_id,pro_id);


ALTER TABLE Clientes ADD CONSTRAINT FK_Clientes_0 FOREIGN KEY (cid_id) REFERENCES Cidades (cid_id);


ALTER TABLE Pedidos ADD CONSTRAINT FK_Pedidos_0 FOREIGN KEY (cli_id) REFERENCES Clientes (cli_id);
ALTER TABLE Pedidos ADD CONSTRAINT FK_Pedidos_1 FOREIGN KEY (cid_id) REFERENCES Cidades (cid_id);


ALTER TABLE Produtos ADD CONSTRAINT FK_Produtos_0 FOREIGN KEY (cat_id) REFERENCES Categorias (cat_id);


ALTER TABLE Cesta ADD CONSTRAINT FK_Cesta_0 FOREIGN KEY (cli_id) REFERENCES Clientes (cli_id);


ALTER TABLE Cesta_itens ADD CONSTRAINT FK_Cesta_itens_0 FOREIGN KEY (ces_sessao) REFERENCES Cesta (ces_sessao);
ALTER TABLE Cesta_itens ADD CONSTRAINT FK_Cesta_itens_1 FOREIGN KEY (pro_id) REFERENCES Produtos (pro_id);


ALTER TABLE Pedidos_itens ADD CONSTRAINT FK_Pedidos_itens_0 FOREIGN KEY (ped_id) REFERENCES Pedidos (ped_id);
ALTER TABLE Pedidos_itens ADD CONSTRAINT FK_Pedidos_itens_1 FOREIGN KEY (pro_id) REFERENCES Produtos (pro_id);


