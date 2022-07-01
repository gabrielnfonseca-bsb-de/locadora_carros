<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Locadora</title>
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Atualização de montadora</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="/locadora_m31/controle/atualizar_montadora.php">
<label>Escolha a montadora a ser atualizada:</label>
    <?php
        include("../controle/conexao.php");
        try{
            $sql = 'SELECT * FROM montadora ORDER BY montadora';
            print "<select name = 'cmb_montadora'>";
            foreach($conn->query($sql) as $row){
                print"<option value ='".$row['cod_montadora']."'.>".$row['montadora']."</option>";
                }
                print"</select>";
        }catch(PDOException $ex){
            echo 'Erro '.$ex->getMessage();
        }
    ?><br><br>
    
    <label>Digite um novo nome para a montadora: </h3>
    <input type='text' name='txt_montadora'><br><br>
    <input type='submit' value='Atualizar'>
</form>
</fieldset>
    
</body>
</html>