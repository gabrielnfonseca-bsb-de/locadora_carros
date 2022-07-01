<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Login de usuário</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $usuario = $_POST['cmb_usuario'];
    $senha = $_POST['psw_senha'];
    $sql="SELECT * FROM usuario WHERE cod_usuario='$usuario'";
    $conn->query($sql);
    $query = $conn->prepare($sql);
    $result = $query->execute();
    $cod_user = $query->fetchColumn();
    var_dump($cod_user);
    if (['cod_usuario']=='1'){
        echo "Acesso Liberado";
    }
    else{
        echo "Tente outra vez";
    }
    echo "<h4>Usuário encontrado!</h4>
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