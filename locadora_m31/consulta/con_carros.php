<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Locadora</title>
</head>
<body>
    <h1>Carros</h1>
    <div class="flex-container">
    <div id="box">
        <table border="1"><tr><th width="50%"></th><th>Tipo</th><th>Montadora</th>
        <th>Valor</th></th>
    <?php
    include (".../controle/conexao.php");
    try{
        $carro = $_POST['txt_carro'];
        $sql = "SELECT c.cod.carro, c.carro, t.tipo, m.montadora, c.valor FROM carro c
        INNER JOIN tipo t ON t.cod_tipo=c.tpo_carro
        WHERE carro LIKE '%carro%' ORDER BY c.carro";
        print "<form method='post' action='/locadora_m31/controle/inserir_itens_locacao.php'";
        foreach($conn->query($sql) as $row){
            print "<tr><td><input type ='radio' name='item' value='".$row['carro']."'>".$row['carro']."</td>
                <td>".$row['tipo']."</td>
                <td width='15%'>".$row['montadora']."</td>
                <td class='valores' width='30%'> R$ ".number_format($row['valor'],2,",",".")."</td></tr>";
        }
    echo "<br><a href='http://localhost/formulario/cad_itens_locacao.php'>voltar</a>";
    echo "<td colspan='3'></td>";
    print "<td><input type='submit' value=Incluir item'></form></td>";     
    }catch(PDOException $ex){
        echo 'ERROR '. $ex->getMessege();
    }
    ?>
    </table><br><a href='htto://localhost/locadora_m31'>Voltar</a>
</div></div></body></html>