<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Locadora</title>
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Recibo de locações</h1>
<div class="flex-container">
<div id="box">
<fieldset>
    <table border="1"><tr><th width="50%">Bairro</th><th>Média de valores locados</th></tr>
<?php
    include ("../controle/conexao.php");
    try{
        $sql = "SELECT b.bairro, AVG(f.valor) FROM cliente c
        INNER JOIN bairro b ON b.cod_bairro=c.bairro_cliente 
        INNER JOIN locacao l ON c.cod_cliente=l.cliente_locacao
        INNER JOIN carros_locacao i ON i.locacao=l.cod_locacao
        INNER JOIN carro f On i.carro_locado=f.cod_carro
        GROUP BY b.bairro ORDER BY AVG(f.valor) DESC";
        foreach ($conn->query($sql) as $row){
            print "<tr><td>".$row['bairro']."</td>
                    <td class='valores' width='25%'>R$ ".number_format($row['AVG(f.valor)'],2,",",".")."</td></tr>";
        }
    }catch(PDOException $ex){
        echo 'Erro '. $ex->getMessage();
    }
?>
</table><br><a href='http://localhost/locadora_m31/index2.html'>Voltar</a>
</fieldset>
</div>
</div>
</body>
</html>