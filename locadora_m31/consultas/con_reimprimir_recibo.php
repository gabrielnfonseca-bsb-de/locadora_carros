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
<h1>Recibo</h1>
<div class="flex-container">
<div id="box">
<fieldset>
	<form method="POST" action="/locadora_m31/consultas/con_recibo.php">
	    <label>Selecione a locação desejada:</label>
<?php
include ("../controle/conexao.php");
try{
    $sql = 'SELECT cod_locacao FROM locacao ORDER BY cod_locacao DESC';
    print "<select name='locacao'>";
    foreach ($conn->query($sql) as $row){
        print "<option value='".$row['cod_locacao']."'>".$row['cod_locacao']."</option>";
    }
    print "</select>";
}
catch(PDOException $ex){
    echo 'Erro' . $ex->getMessage();
}
?>
    <input type='submit' name='Recibo'>
	</form>
</fieldset>
</body>
</html>