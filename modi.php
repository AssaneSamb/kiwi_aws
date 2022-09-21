<?php  
$objetpdo = new PDO('mysql:host=kiwi.c5ao8zacwqwq.eu-west-3.rds.amazonaws.com;dbname=contact','kiwi','admin1234');

$pdoStat= $objetpdo->prepare('UPDATE personne set prenom =:prenom,nom =:nom ,tel =:tel ,adresse =:adresse ,email =:email ,sexe =:sexe where Matricule=:num LIMIT 1') ;
header("location:lister.php");
$pdoStat->bindValue (':num',$_POST['Matricul'], PDO::PARAM_STR);
$pdoStat->bindValue (':prenom',$_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue (':nom',$_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue (':tel',$_POST['tel'], PDO::PARAM_INT);
$pdoStat->bindValue (':adresse',$_POST['adresse'], PDO::PARAM_STR);
$pdoStat->bindValue (':email',$_POST['email'], PDO::PARAM_STR);
$pdoStat->bindValue (':sexe',$_POST['sexe'], PDO::PARAM_STR);

$executeIsOk = $pdoStat->execute(); 
if ($executeIsOk) {
   $message='Contact bien modifié!';
}else{
     $message='Echec de la modification! ';
}

?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Resultat_Modification</title>s
</head>
<body>
	<h1>Résultat de la modificatoin: </h1>
<p><?php
echo $message;
 ?>
 <br><a href="lister.php">Voir liste des membres</a>
</p>
</body>
</html>