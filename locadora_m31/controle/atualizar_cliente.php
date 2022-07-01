<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Atualização de cliente</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $cod_cliente = $_POST['cmb_cliente'];
    $up_cliente = $_POST['txt_cliente'];
    $up_cpf = $_POST['txt_cpf'];
    $up_bairro = $_POST['cmb_bairro'];
    $sql = "UPDATE cliente set cliente='$up_cliente', cpf='$up_cpf', bairro_cliente='$up_bairro' WHERE cod_cliente='$cod_cliente'";
    $conn->query($sql);
    echo "<h4>Cliente atualizado com sucesso!</h4>
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