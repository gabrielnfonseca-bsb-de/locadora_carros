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
<h1>Contagem de tipo por montadora</h1>
<div width="auto" class="flex-container">
<div width="auto" id="box">
<fieldset>
    <table border="1"><tr><th width="50%">Montadora</th><th>Total de tipos</th></tr>
<?php
    include ("../controle/conexao.php");
    try{
        $sql = "SELECT COUNT(t.tipo), m.montadora FROM carro c
        INNER JOIN tipo t ON t.cod_tipo=c.tipo_carro 
        INNER JOIN montadora m ON m.cod_montadora=c.montadora_carro
        GROUP BY m.montadora ORDER BY t.tipo DESC";
        foreach ($conn->query($sql) as $row){
            print "<tr><td>".$row['montadora']."</td>
                    <td class='tipos' width='25%'> ".$row['COUNT(t.tipo)']."</td></tr>";
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