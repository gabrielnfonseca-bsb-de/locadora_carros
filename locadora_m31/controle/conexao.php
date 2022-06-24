<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=locadora_m8","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names UTF8");
}catch(PDOException $ex){
    echo 'Deu ruim, sem acesso ao sistema:'. $ex->getMessage();
}
?>