<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Exclusão de bairro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $cod_bairro = $_POST['cmb_bairro'];
    $sql = "UPDATE cliente set bairro_cliente=21 WHERE bairro_cliente=$cod_bairro";
    $conn->query($sql);
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
try{
    $sql = "DELETE FROM bairro WHERE cod_bairro='$cod_bairro'";
    $conn->query($sql);
    echo "<h4>Bairro excluido com sucesso</h4>
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