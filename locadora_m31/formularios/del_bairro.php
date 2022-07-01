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
<form method="POST" action="/locadora_m31/controle/deletar_bairro.php">
<label>Bairro</label>
    <?php
        include("../controle/conexao.php");
        try{
            $sql = 'SELECT * FROM bairro ORDER BY bairro';
            print "<select name = 'cmb_bairro'>";
            foreach($conn->query($sql) as $row){
                print"<option value ='".$row['cod_bairro']."'.>".$row['bairro']."</option>";
                }
                print"</select>";
        }catch(PDOException $ex){
            echo 'Erro '.$ex->getMessage();
        }
    ?><br><br>
<input type='submit' value='Excluir'>
</form>
</fieldset>
</body>
</html>
