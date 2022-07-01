<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Locadora</title>
    <link rel="stylesheet" type="text/css" href="estilos/geral.css">
</head>
<body>
<h1>Locadora - Acesso M31</h1>
<div class="flex-container">
<div id="box">
<fieldset>
    <h3>Acesso</h3>
    <table>
    <form method="post" action="controle/logar_usuario.php">
        <label>Usuário: </label>
        <?php
        include("controle/conexao.php");
        try{
            $sql = 'SELECT * FROM usuario ORDER BY usuario';
            print "<select name='cmb_usuario'>"; //select é pra exibir uma janela de escolha
            foreach($conn->query($sql) as $row){
                print"<option value='".$row['cod_usuario']."'.>".$row['usuario']."</option>";
                }
            print"</select>";
            }
            catch(PDOException $ex){
            echo 'Erro '.$ex->getMessage(); 
            }
        ?><br><br>
         <label>Senha: </label>
         <input type="password" name="psw_senha"><br><br>
        <input type="submit" value="Acessar">
    </form>
</fieldset>
    </table><br></div></div>    
</body>
</html>