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
<h1>Atualização de cliente</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="/locadora_m31/controle/atualizar_cliente.php">
<label>Escolha o cliente a ser modificadoo:</label>
    <?php
        include("../controle/conexao.php");
        try{
            $sql = 'SELECT * FROM cliente ORDER BY cliente';
            print "<select name = 'cmb_cliente'>";
            foreach($conn->query($sql) as $row){
                print"<option value ='".$row['cod_cliente']."'.>".$row['cliente']." - ".$row['cpf']."</option>";
                }
                print"</select>";
        }catch(PDOException $ex){
            echo 'Erro '.$ex->getMessage();
        }
    ?><br><br>
    
    <label>Digite um novo nome para o cliente: </label>
    <input type='text' name='txt_cliente'><br><br>
    <label>Digite um novo cpf para o cliente: </label>
    <input type='text' name='txt_cpf'><br><br>
    <label>Selecione um novo bairro para o cliente: </label>
    <?php
include("../controle/conexao.php");
try{
    $sql = 'SELECT * FROM bairro ORDER BY bairro';
    print "<select name ='cmb_bairro'>";
    foreach($conn->query($sql) as $row){
        print"<option value ='".$row['cod_bairro']."'.>".$row['bairro']."</option>";
        }
        print"</select>";
}catch(PDOException $ex){
    echo 'Erro '.$ex->getMessage();
}
    ?>
    <br><br>
    <input type='submit' value='Atualizar'>
</form>
</fieldset>
    
</body>
</html>