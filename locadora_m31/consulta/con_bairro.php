<?php
include ("conexao.php");
try{
	$sql = 'SELECT cod_bairro, bairro FROM bairro';
	foreach ($conn->query($sql) as $row) {
	    print $row['cod_bairro']." ";
	    print $row['bairro']."<br/>";
	}
}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>