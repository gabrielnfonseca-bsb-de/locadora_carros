<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Projeto locadora</title>
    <link rel="stylesheet" type="text/css" href="estilos\geral.css">
</head>
<body>
    <h1>Busca de usuario</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
        include ("conexao.php");
        try{
            $usuario=$_POST['cmb_usuario'];
            $senha = $_POST['psw_senha']
            $sql = "SELECT * FROM usuario WHERE cod_usuario=$usuario";
            $conn->query($sql);
            $query = $conn->execute();
            $
            if (['senha']==$senha){
                echo "acesso liberado";
            }else{
                echo "Tente outra vez";
            }
        }catch(PDOException $ex){
            echo 'ERROR'.$ex->getMessage();
        }
    ?> 
</fieldset></div></div></body></html>