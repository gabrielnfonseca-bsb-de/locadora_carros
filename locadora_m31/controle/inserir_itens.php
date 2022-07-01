<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
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
    $item = $_POST['brd_item'];
    $sql = "SELECT cod_locacao FROM locacao ORDER BY cod_locacao DESC LIMIT 1";
    foreach($conn->query($sql) as $row){
        $codloc=$row['cod_locacao'];
    }
    $sql="INSERT INTO carros_locacao(carro_locado,locacao) VALUES ('$item',$codloc)";
    $conn->query($sql);
    echo "<h4>Item incluido com sucesso!</h4>
        <h3><a href='/locadora_m31/index2.html'>Voltar</a></h3>
        <br><h3><a href='../formularios/cad_finalizar.php'>Fechar locação</a>";
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset>
</div>
</div>
</body>
</html>