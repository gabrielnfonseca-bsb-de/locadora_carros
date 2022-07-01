#SOURCE C:\xampp\htdocs\locadora_m31\scripts\locadora.sql
CREATE DATABASE locadora_m31;
USE locadora_m31;
CREATE TABLE cidade(
    cod_cidade int NOT NULL AUTO_INCREMENT,
    cidade varchar(25) NOT NULL,
    PRIMARY KEY(cod_cidade)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE tipo(
    cod_tipo int NOT NULL AUTO_INCREMENT,
    tipo varchar(15) NOT NULL,
    PRIMARY KEY(cod_tipo)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE montadora(
    cod_montadora int NOT NULL AUTO_INCREMENT,
    montadora varchar(15) NOT NULL,
    PRIMARY KEY(cod_montadora)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE passageiro(
    cod_passageiro int NOT NULL AUTO_INCREMENT,
    passageiro varchar(25) NOT NULL,
    cidade_passageiro int NOT NULL,
    PRIMARY KEY(cod_passageiro),
    FOREIGN KEY(cidade_passageiro) REFERENCES cidade(cod_cidade)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE locacao(
    cod_locacao int NOT NULL AUTO_INCREMENT,
    cliente_locacao int NOT NULL,
    data_locacao date NOT NULL,
    PRIMARY KEY(cod_locacao),
    FOREIGN KEY(cliente_locacao) REFERENCES cliente(cod_cliente)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE carro(
    cod_carro int NOT NULL AUTO_INCREMENT,
    carro varchar(35) NOT NULL,
    tipo_carro int NOT NULL,
    montadora_carro int NOT NULL,
    valor float NOT NULL,
    PRIMARY KEY(cod_carro),
    FOREIGN KEY(tipo_carro) REFERENCES tipo(cod_tipo),
    FOREIGN KEY(montadora_carro) REFERENCES montadora(cod_montadora)    
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE carros_locacao(
    carro_locado int NOT NULL,
    locacao int NOT NULL,
    FOREIGN KEY(carro_locado) REFERENCES carro(cod_carro),
    FOREIGN KEY(locacao) REFERENCES locacao(cod_locacao)
) ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE usuario(
    cod_usuario int NOT NULL AUTO_INCREMENT,
    usuario varchar(15) NOT NULL,
    senha varchar(5) NOT NULL,
    PRIMARY KEY(cod_usuario)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
  
-- INSERT INTO bairro(bairro) VALUES ("Jardim Botanico");
-- INSERT INTO cliente(cliente,bairro_cliente) VALUES ("Matheus", 1);

ALTER TABLE cliente ADD cpf varchar(11) NOT NULL;

SELECT i.cliente, c.carro, t.tipo, m.montadora, c.valor FROM carro c 
INNER JOIN tipo t ON t.cod_tipo = c.tipo_carro
INNER JOIN montadora m ON m.cod_montadora = c.montadora_carro
INNER JOIN carros_locacao o ON o.carro_locado = c.cod_carro
INNER JOIN locacao a ON a.cod_locacao = o.locacao
INNER JOIN cliente i ON i.cod_cliente = a.cliente_locacao;


SELECT r.carros_locacao, b.bairro FROM carros_locacao r;

UPDATE bairro SET cod_bairro WHERE cod_bairro='$cod_bairro';

SELECT c.cliente, b.bairro FROM cliente c INNER JOIN bairro b ON b.cod_bairro=c.bairro_cliente;

INSERT INTO usuario(usuario,senha) VALUES ('Ana','12345');

DELETE FROM nomedatabela WHERE codigodeitemdatabela = codigo;




