<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Exclusão de carro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $cod_carro=$_POST['cmb_carro'];
    $sql = "UPDATE carros_locacao set carro_locado=24 WHERE carro_locado=$cod_carro";
    $conn->query($sql);
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();  
}
try{
    $sql="DELETE FROM carro WHERE cod_carro='$cod_carro'";
    $conn->query($sql);
    echo "<h4>carro deletado com sucesso!</h4>
        <h3><a href='/locadora_m31/index2.html'>Voltar</a></h3>";
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset>
</div>
</div>
</body>
</html>