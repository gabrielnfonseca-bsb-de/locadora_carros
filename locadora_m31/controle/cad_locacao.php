<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto locadora</title>

</head>
<body>
<h1>Cadastro de locação</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
    try{
    $var_cliente=$_POST['txt_cliente'];
    $var_bairro=$_POST['cmb_bairro'];
    $sql="INSERT INTO cliente(cliente,bairro_cliente) VALUES ('$var_cliente',$var_bairro)";
    $conn->query($sql);
    echo "<h4>Locação de".$var_cliente."</h4>
        <h3><a href='/locadora_m31'>Voltar</a></h3>";    
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset></div></div></body></html>