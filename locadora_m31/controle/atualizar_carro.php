<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Atualização de carro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $cod_carro = $_POST['cmb_carro'];
    $up_carro = $_POST['txt_carro'];
    $up_montadora = $_POST['cmb_montadora'];
    $up_tipo = $_POST['cmb_tipo'];
    $up_valor = $_POST['txt_valor'];
    $sql = "UPDATE carro set carro='$up_carro', montadora_carro='$up_montadora', tipo_carro='$up_tipo', valor='$up_valor' WHERE cod_carro='$cod_carro'";
    $conn->query($sql);
    echo "<h4>carro atualizado com sucesso!</h4>
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