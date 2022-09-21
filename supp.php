<?php  
$objetpdo = new PDO('mysql:host=localhost;dbname=projet','root','');
$pdoStat= $objetpdo->prepare('DELETE FROM personne WHERE Matricule=:num LIMIT 1');

$pdoStat->bindValue (':num',$_GET['Matricul'], PDO::PARAM_STR);


$insertIsOk = $pdoStat->execute();
header("location:lister.php");
?> 