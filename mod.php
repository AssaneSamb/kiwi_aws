<?php  
$objetpdo = new PDO('mysql:host=kiwi.c5ao8zacwqwq.eu-west-3.rds.amazonaws.com;dbname=contact','kiwi','admin1234');
$pdoStat= $objetpdo->prepare('SELECT * FROM personne where Matricule=:num' );

$pdoStat->bindValue (':num',$_GET['Matricul'], PDO::PARAM_STR);


$executeIsOk = $pdoStat->execute();
//
$personne=$pdoStat->fetch();
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modification de contacts</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
   <div class="box">
   	<h1>~modifie_Compte~</h1>
      <br>
      <form action="modi.php" method="POST ">
         <div class="inputBox">
            <input id="Matricule" type="password" name="Matricule"value="<?= $personne['Matricule'];?>">
            <label>Maticul_ou_Password</label>
   		<div class="inputBox">
   			<input id="prenom" type="text" name="prenom"value="<?= $personne['prenom'];?>">
   			<label>Prenom</label>
   		</div>
   		<div class="inputBox">
   			<input id="nom" type="text" name="nom"value="<?= $personne['nom'];?>">
   			<label>Nom</label>
   		</div>
         <div class="inputBox">
            <input id="tel" type="text" name="tel"value="<?= $personne['tel'];?>">
            <label>Num°_tel</label>
         </div>
         <div class="inputBox">
            <input id="adresse" type="text" name="adresse"value="<?= $personne['adresse'];?>">
            <label>Adresse</label>
         </div> 
         <div class="inputBox">
            <input id="email" type="email" name="email"value="<?= $personne['email'];?>">
            <label for="mel">Adresse_electronique</label>
         </div><br>
            <p>Sexe</p><br>
            <select name="sexe" > 
          <option value="<?= $personne['sexe'];?>" >Homme</option>
          <option value="<?= $personne['sexe'];?>" >Femme</option>
       </select> 
         <br>
        <br>
   		<p><input type="submit" name ="Modifier"></p>
         <br>
         
   	</form>
   </div>
</body>
