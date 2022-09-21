<?php 
$objetpdo = new PDO('mysql:host=kiwi.c5ao8zacwqwq.eu-west-3.rds.amazonaws.com;dbname=contact','kiwi','admin1234');

$pdoStat= $objetpdo->prepare('INSERT INTO personne values(:Matricule,:prenom ,:nom,:tel,:adresse,:email,:sexe)');


$pdoStat->bindValue (':Matricule',$_POST['Matricule'], PDO::PARAM_STR);
$pdoStat->bindValue (':prenom',$_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue (':nom',$_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue (':tel',$_POST['tel'], PDO::PARAM_INT);
$pdoStat->bindValue (':adresse',$_POST['adresse'], PDO::PARAM_STR);
$pdoStat->bindValue (':email',$_POST['email'], PDO::PARAM_STR);
$pdoStat->bindValue (':sexe',$_POST['sexe'], PDO::PARAM_STR);


$insertIsOk = $pdoStat->execute();

if ($insertIsOk) {

$message ='Ajouter avec succes ';
}
else{
$message ='Echec de l\'insection';	

}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <link rel="stylesheet" type="text/css" href="style.css">
 	<meta charset="utf-8">
 	<title>Insertion</title>
 </head>
 <body>
 	<?php 
  include("index.html");
  ?>
 <h1>insertion des contacts:</h1><br>
 <h2><p><?php echo $message; ?></p></h2><br>
   <a href="lister.php">Voir les Membres</a> 
 </body>
 </html>