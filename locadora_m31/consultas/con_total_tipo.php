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
<h1>Faturamento por tipo</h1>
<div class="flex-container">
<div id="box">
<fieldset>
    <table border="1"><tr><th width="50%">Tipo</th><th>Total locado</th></tr>
<?php
    include ("../controle/conexao.php");
    try{
        $sql = "SELECT t.tipo, sum(c.valor) FROM carro c
        INNER JOIN tipo t ON t.cod_tipo=c.tipo_carro 
        GROUP BY t.tipo ORDER BY sum(c.valor) DESC";
        foreach ($conn->query($sql) as $row){
            print "<tr><td>".$row['tipo']."</td>
                    <td class='valores' width='25%'>R$ ".number_format($row['sum(c.valor)'],2,",",".")."</td></tr>";
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