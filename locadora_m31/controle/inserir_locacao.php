<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Locação</title>
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<div class="flex-container">
<div id="box">

<fieldset>
<?php
include("conexao.php");
try{
    $var_cliente=$_POST['cmb_cliente'];
    $var_data=$_POST['txt_data'];
    $var_data=DATE($var_data);
    $sql="INSERT INTO locacao(cliente_locacao,data_locacao) VALUES ('$var_cliente','$var_data')";
    $conn->query($sql);
    echo "<h4>Locação realizada</h4>
    <h3><a href='../formularios/cad_itens_locacao.php'>Selecione os Veículos</a></h3>";
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset></div></div></body></html>