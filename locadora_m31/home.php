<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cliente</title>
    <link rel="stylesheet" type="text/css" href="estilos\geral.css">
</head>
<body>
    <h1>Usuario</h1>
<div class="flex-container">
<div id="box">
<fieldset>
    <h3>Acesso</h3>
    <table>
        <form method="post" action="controle/logar_usuario.php">
            <label>Usuario</label>
    <?php
    include("controle/conexao.php");
    try{
    $sql='SELECT * FROM usuario by usuario';
    print "<select name='cmb_usuario'>";
    foreach ($conn->query($sql) as $row){
        print"<option value='".$row['cod_usuario']."'>".$row['usuario']."</option>";
    }
    print "</select>";
    }catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
    }
?><br><br>
        <label>Senha</label>
        <input type="password" name="pass_senha"><br><br>
        <input type="submit" value="Acessar">
</form></talble></fieldset><br></div></div></body></html>