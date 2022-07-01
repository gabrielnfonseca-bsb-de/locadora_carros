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
        $sql = "SELECT  FROM cliente c
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