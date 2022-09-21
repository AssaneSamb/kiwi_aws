 <?php
 $objetpdo = new PDO('mysql:host=kiwi.c5ao8zacwqwq.eu-west-3.rds.amazonaws.com;dbname=contact','kiwi','admin1234');


 $pdoStat= $objetpdo->prepare('SELECT * FROM personne ORDER BY nom ASC' );

 $executeIsOk = $pdoStat->execute();

$personnes = $pdoStat->fetchAll();
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<title>membre</title>
  </head>
  <body>
    <?php 
  include("index");
  ?>
  <h1>lister des membres</h1>
  <table border="1.75px" style="width: 100%" >
      <tr>
      	<th>Matricule</th>
  		<th>Prenom</th>
  		<td>Nom</td>
  		<th>Tel</th>
  		<th>Adresse</th>
  		<th>Email</th>
  		<th>Sexe</th>
  		<td>Supprimer</td>
  		<td>Modifier</td>
  	</tr>
   
      	<?php foreach ($personnes as $personne){
         
        ?> 
        <tr>
          <td><?php echo $personne['Matricule']?></td>
          <td><?php echo $personne['prenom']?></td>
          <td> <?php echo$personne['nom']?></td>
          <td><?php echo $personne['tel']?></td>
          <td><?php echo $personne['adresse']?></td>
          <td><?php echo$personne['email']?></td>
          <td><?php echo$personne['sexe']?></td>
          <td><a href="supp.php?Matricul=<?= $personne['Matricule']?>">supprimer</a></td>
          <td><a href="mod.php?Matricul=<?= $personne['Matricule']?>">modifier</a></td>
        </tr>
 	    <?php
  	     } ?>
  	</table>
  </body>
  </html> 