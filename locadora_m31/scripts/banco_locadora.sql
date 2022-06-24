CREATE DATABASE 'locadora_m8';
USE locadora_matutino;
CREATE TABLE bairro(
    cod_bairro int NOT NULL AUTO_INCREMENT,
    bairro varchar(15) NOT NULL,
    PRIMARY KEY(cod_bairro)
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
CREATE TABLE carro(
    cod_carro int NOT NULL AUTO_INCREMENT,
    carro varchar(30) NOT NULL,
    tipo_carro int NOT NULL,
    montadora_carro int NOT NULL,
    PRIMARY KEY(cod_carro),
    FOREIGN KEY(tipo_carro) REFERENCES tipo(cod_tipo),
    FOREIGN KEY(montadora_carro) REFERENCES montadaro(cod_montadora)
CREATE TABLE cliente(
    cod_cliente int NOT NULL AUTO_INCREMENT,
    cliente varchar(35) NOT NULL,
    cpf varchar(14) NOT NULL,
    bairro_cliente int NOT NULL,
    PRIMARY KEY(cod_cliente),
    FOREIGN KEY(bairro_cliente) REFERENCES bairro(cod_bairro)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE locacao(
    cod_locacao int NOT NULL AUTO_INCREMENT,
    cliente_locacao int NOT NULL,
    data_locacao date NOT NULL,
    data_devolucao date NOT NULL,
    PRIMARY KEY(cod_locacao),
    FOREIGN KEY(cliente_locacao) REFERENCES cliente(cod_cliente)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE itens_locacao(
    carro_locado int NOT NULL,
    locacao int NOT NULL,
    valor float NOT NULL,
    FOREIGN KEY(carro_locado) REFERENCES carro(cod_carro),
    FOREIGN KEY(locacao) REFERENCES locacao(cod_locacao)
) ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE usuario(
    cod_usuario int NOT NULL AUTO_INCREMENT,
    usuario varchar(5) NOT NULL,
    PRIMARY KEY(cod_usuario)
) ENGINE=innoDB DEFAULT CHARSET=utf8;

--Seleciona todos os registros da tabela uf
SELECT * FROM uf;

--Seleciona o registros de acordo com o cod_uf solicitado
SELECT * FROM uf WHERE cod_uf=2;

--seleciona registo 2 ou 15, qual existir, da tabela uf
SELECT * FROM uf WHERE cod_uf=2 or cod_uf=15;

/*seleciona todos os registos da tabela uf,
organizados por ordem decrescente de area_km2*/
SELECT * FROM uf ORDER BY area_km2 DESC;

/*seleciona as cidades com menos de 300.000 habitantes
na estado de São Paulo;*/
SELECT * FROM cidades WHERE uf='SP' AND populacao < 300000 ORDER BY populacao DESC;

/*seleciona as 3 cidades mais populosas do estado SP*/
SELECT * FROM cidades WHERE uf='SP' ORDER BY populacao DESC LIMIT 3;

/*seleciona tudo na tabela estado, exceto os registros
com cod_uf (11,12,15)*/
SELECT * FROM uf WHERE cod_uf NOT IN(11,12,15);

--lista todos estados que começam com a letra a
SELECT * FROM uf WHERE estado LIKE 'a%';

/*seleciona alguns campos nas tabelas estado e cidade,
com os mesmos cod_uf*/
SELECT u.estado, c.nome_mun, c.populacao FROM uf u INNER JOIN cidades c ON u.cod_uf = c.cod_uf LIMIT 10;

--cadastra o bairro Asa sul na tabela bairro
INSERT INTO bairro(bairro) VALUES ('Asa Sul');

--cadastra cliente Marcelo no bairro Asa sul
INSERT INTO cliente(cliente, cpf, bairro_cliente) VALUES ('Marcelo', '559.586.991-72', 1);

--seleciona nomes do cliente e bairro
SELECT c.cliente, b.bairro FROM cliente c INNER JOIN bairro b ON b.cod_bairro = c.bairro_cliente;

--seleciona filme, genero produtora, da tabela filme junto com a tabela genero, onde as chaves primárias e secundárias aão iguais
SELECT f.filme, g.genero, p.produtora FROM filme f INNER JOIN genero g ON f.cod_filme = g.cod_genero INNER JOIN f.cod_filme=p.cod_produtora;

--altera o campo produtora na tabela cliente, para o tipo inteiro, não permitindo valor nulo
ALTER TABLE bairro MODIFY cod_bairro INT AUTO_INCREMENT;

--apaga o campo produtora da tabela cliente
ALTER TABLE cliente DROP produtora;

--adiciona o campo nome_cliente, com o tipo varchar, aceitando 35 caracteres, não permitindo nulo
ALTER TABLE filme ADD diretor_filme int not null;

--altera o campo diretor_filme, para chave estrangeira, associado a chave primária da tabela diretor
ALTER TABLE filme ADD FOREIGN KEY (diretor_filme) REFERENCES diretor(cod_diretor);

cd \xampp\mysql\bin 
./mysql -u root -p
USE locadora_m31
SELECT * FROM bairro;
DELETE FROM bairro WHERE cod_bairro=3;