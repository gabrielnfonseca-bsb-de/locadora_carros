<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cliente</title>
    <link rel="stylesheet" type="text/css" href="estilos\geral.css">
</head>
<body>
    <h1>Usuario</h1>
<div class="flex-container">
<div id="box">
<fieldset>
    <table boder="1"><tr><th widt="50%">Montadora</th><th>Quantidade</th></tr>
<?php
include (".../controle/conexao.php")
try{
    $sql ="SELECT COUNT(c.valor), m.montadora FROM carro c
    INNER JOIN tipo t t.cod_tipo=c.tipo_carro
    INNER JOIN montadora m ON m.cod_montadora=c.montadora_carro
    GROUP BY m.montadora ORDER BY t.tipo";
    foreach ($conn->query($sql) as $row){
        
    }
}