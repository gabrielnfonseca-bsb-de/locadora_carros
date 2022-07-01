SELECT c.carro, m.montadora, t.tipo, c.valor FROM carro c 
INNER JOIN montadora m ON c.montadora_carro = m.cod_montadora 
INNER JOIN tipo t  ON c.tipo_carro = t.cod_tipo;