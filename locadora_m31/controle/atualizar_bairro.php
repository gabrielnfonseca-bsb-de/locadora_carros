<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Atualização de bairro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $cod_bairro = $_POST['cmb_bairro'];
    $up_bairro = $_POST['txt_bairro'];
    $sql = "UPDATE bairro set bairro='$up_bairro' WHERE cod_bairro='$cod_bairro'";
    $conn->query($sql);
    echo "<h4>Bairro atualizado com sucesso!</h4>
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