<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>M8 Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilo/geral.css">
</head>
<body>
<h1>Cadastro de cliente</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/cad_cliente.php">
    <label>cliente:</label>
    <input type="text" name="txt_cliente"/>

<?php
     include ("../controle/conexao.php");
     try{
         $sql = 'SELECT * FROM bairro';
         print "<select name='cmb_bairro'>";
         foreach($conn->query($sql) as $row){
             print "<option value='".$row['cod_bairro']."'>".$row['bairro']."</option>";
         }
         print "</select>";   
     }catch(PDOException $ex){
         echo 'Corra para as montanhas'.$ex->getMessage();
     }
   ?>
   <nav class="botoes"><input type="submit" value="Cadastrar"></nav>
</form></fieldset></div></div></body></html>        
     }    
   
</form></fieldset></div></div></body></html>