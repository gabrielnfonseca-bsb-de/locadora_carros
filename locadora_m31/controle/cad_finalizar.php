<?php
inlcude();
try{
    $sql = 'SELECT cod_locacao FROM locacao ORDER BY cod_locacao DESC LIMIT 1';
    $conn->query($sql);
    $query = $conn->prepare($sql);
    $result = $query->execute();
    $codloc = $query->fetchColumn();
    echo "<input type='hidden' name='locacao' value='".$codloc."'>";
    //var_dump($codloc);
}catch(PDOException $ex){
    echo 'ERROR'. $ex->getMessege();
}
?>
    <input type='submit'>