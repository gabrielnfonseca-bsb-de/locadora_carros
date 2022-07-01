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
<h1>Atualização de carro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="/locadora_m31/controle/atualizar_carro.php">
<label>Escolha o carro a ser atualizado:</label>
    <?php
        include("../controle/conexao.php");
        try{
            $sql = 'SELECT * FROM carro ORDER BY carro';
            print "<select name = 'cmb_carro'>";
            foreach($conn->query($sql) as $row){
                print"<option value ='".$row['cod_carro']."'.>".$row['carro']."</option>";
                }
                print"</select>";
        }catch(PDOException $ex){
            echo 'Erro '.$ex->getMessage();
        }
    ?><br><br>
    
    
    <label>Escolha um novo modelo para o carro: </label>
    <?php
        include("../controle/conexao.php");
        try{
        $sql = 'SELECT * FROM tipo ORDER BY tipo';
        print "<select name='cmb_tipo'>"; //select é pra exibir uma janela de escolha
        foreach($conn->query($sql) as $row){
            print"<option value='".$row['cod_tipo']."'.>".$row['tipo']."</option>";
            }
        print"</select>";
        }
        catch(PDOException $ex){
        echo 'Erro '.$ex->getMessage(); 
        }
    ?><br><br>
    <label>Digite um novo nome para o carro: </label>
    <input type='text' name='txt_carro'><br><br>
    <label>Escolha uma nova montadora para o carro: </label>
    <?php
        include("../controle/conexao.php");
        try{
            $sql = 'SELECT * FROM montadora ORDER BY montadora';
            print "<select name='cmb_montadora'>"; //select é pra exibir uma janela de escolha
            foreach($conn->query($sql) as $row){
                print"<option value='".$row['cod_montadora']."'.>".$row['montadora']."</option>";
                }
            print"</select>";
            }
            catch(PDOException $ex){
            echo 'Erro '.$ex->getMessage(); 
            }
    ?><br><br>
    <label>Digite um novo valor para o carro: </label>
    <input type='text' name='txt_valor'><br><br>
    <input type='submit' value='Atualizar'>
</form>
</fieldset>
    
</body>
</html>