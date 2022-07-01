<!DOCTYPE html>
<html lang ="pt-br">
    <head>
        <meta name="viewport" content="width=device=width, initial-scale=1.0, max-scale=1.0">
        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
        <title>Projeto Locadora</title>
    </head>
    <body>
        <h1>Cadastro de Cliente</h1>
        <div class="flex-container">
            <div id="box">
                <fieldset>
                    <?php
                    include("conexao.php");
                    try{
                        $cliente=$_POST['txt_cliente'];
                        $bairro=$_POST['cmb_bairro'];
                        $cpf=$_POST['txt_cpf'];

                        $sql="INSERT INTO cliente(cliente,bairro_cliente, cpf) VALUES('$cliente','$bairro','$cpf')";
                        $conn->query($sql);

                        echo "<h4>Cliente Cadastrado com sucesso</h4><h3><a href='/locadora_m31/index2.html'>Voltar</a></h3>";
                    }catch(PDOException $ex){
                        echo "Erro ".$ex->getMessage();
                    }
                    ?>
                </fieldset>
    </body>

</html>