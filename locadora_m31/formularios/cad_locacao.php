<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Locação de veículo</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/inserir_locacao.php">
	<label>Cliente:</label>
	<?php
	include("../controle/conexao.php");
	try{
		$sql = 'SELECT * FROM cliente ORDER BY cliente';
		print "<select name='cmb_cliente'>"; //select é pra exibir uma janela de escolha
		foreach($conn->query($sql) as $row){
			print"<option value='".$row['cod_cliente']."'.>".$row['cliente']." ".$row['cpf']."</option>";
			}
		print"</select>";
		}
		catch(PDOException $ex){
		echo 'Erro '.$ex->getMessage(); 
		}
	?><br><br>
	<label>Data:</label>
	<input type="date" name="txt_data"/><br><br>
	<input type="submit" value="Cadastrar">
</form>
</fieldset><div></div></body></html>