<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device=width, initial-scale=1.0, max-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
    <title>Cadastro de cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <div class="flex-container">
        <div id="box">
    <fieldset>
     <form method="POST" action="../controle/inserir_cliente.php">
         <table>
            <tr>
                    <td>
                        <label>Digite o nome do cliente</label>
                    </td>
                    <td>
                        <input type="text" name="txt_cliente"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Bairro</label>
                    </td>
                    <td>
                        <?php
                            include("../controle/conexao.php");
                            try{
                                $sql = 'SELECT * FROM bairro ORDER BY bairro';
                                print "<select name = 'cmb_bairro'>";
                                foreach($conn->query($sql) as $row){
                                    print"<option value ='".$row['cod_bairro']."'.>".$row['bairro']."</option>";
                                }
                                print"</select>";
                            }
                            catch(PDOException $ex){
                                echo 'Erro '.$ex->getMessage();
                            }
                        ?><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>CPF</label>
                    </td>
                    <td>
                        <input type = "text" name = "txt_cpf"/><br>
                    </td>
                </tr>
                <tr>
                    <td><td><td>
                        <input type="submit" value="Cadastrar">
                    </td></td></td>
                </tr>
        </table>
     </form>
 </fieldset></div></div></body></html>