<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>M8 Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilo/geral.css">
</head>
<body>
<h1>Cadastro de carro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/cad_carro.php">
    <table>
        <tr><td><label>Carro:</label></td><td><input type="text" name="txt_cliente"/></td></tr>
        <tr><td><label>Tipo:</label></td>
        <td><?php
           include ("../controle/conexao.php");
           try{
               $sql = 'SELECT * FROM tipo ORDER BY tipo';
               print "<select name='cmb_carro'>";
               foreach ($conn->query($sql) as $row) {
                print "<option value='" .$row['cod_tipo']. " '>".$row['tipo']. "</option>";
               }    
                print "</select>";
           }catch(PDOException $ex){
               echo 'Erro '. $ex->getMessage();
           }
        ?></td>
    </tr>
    <tr><td><label>Montadora:</label></td>
        <td><?php
            include ("../controle/conexao.php");
            try{
               $sql = 'SELECT * FROM montadora ORDER BY montadora';
               print "<select name='cmb_montadora'>";
               foreach ($conn->query($sql) as $row) {
                print "<option value='" .$row['cod_montadora']. " '>".$row['montadora']. "</option>";
               }    
                print "</select>";
           }catch(PDOException $ex){
               echo 'Erro '. $ex->getMessage();
           }
        ?></td>
    </tr>
        <tr><td><label>Valor:</label></td><td><input type="text" name="txt_valor"/></td></tr>
        <tr><td></td><td><nav class="botoes"><input type="submit" value="Cadastrar"></nav></td></tr>
    </table>
</form></fieldset></div></div></body></html>