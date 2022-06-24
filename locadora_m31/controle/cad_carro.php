<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Cadastro de bairro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $var_carro=$_POST["txt_carro"];
    $var_tipo=$_POST['txt_tipo'];
    $var_montadora=$_POST['cmb_montadora'];
    $sql="INSERT INTO carro(carro,carro,tipo,montadora,valor)
     VALUES ('$var_carro',$var_tipo,$var_montadora,$var_valor)";
    $conn->query($sql);
    echo "<h4>carro incluido com sucesso</h4>
        <h3><a href='/locadora_m31'>Voltar</a></h3>";    
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset></div></div></body></html>