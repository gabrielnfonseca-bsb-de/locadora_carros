<?php
include ("../controle/conexao.php");
try{
    $sql = "SELECT c.cliente, l.cod_locacao, i.carro_locado, f.carro FROM cliente c
        INNER JOIN locacao l ON c.cod_cliente = l.cliente_locacao
        INNER JOIN carros_locacao i ON l.cod_locacao = i.locacao
        INNER JOIN carro f ON i.carro_locado = f.cod_carro ORDER BY l.cod_locacao";
    print "<table border='1'>";
    foreach($conn->query($sql) as $row){
        print "<tr><td>".$row['cliente']."</td>
                    <td>".$row['cod_locacao']."</td>
                    <td>".$row['carro_locado']."</td>
                    <td>".$row['carro']."</td></tr>";      
    }
    print "</table>";
}
catch(PDOException $ex){
    echo 'Erro '.$ex->getMessage();
}
?>