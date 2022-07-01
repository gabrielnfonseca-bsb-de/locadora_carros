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
    $cod_tipo = $_POST['cmb_tipo'];
    $sql = "UPDATE carro set tipo_carro=11 WHERE tipo_carro=$cod_tipo";
    $conn->query($sql);
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
try{
    $sql = "DELETE FROM tipo WHERE cod_tipo='$cod_tipo'";
    $conn->query($sql);
    echo "<h4>tipo excluida com sucesso</h4>
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