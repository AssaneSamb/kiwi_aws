<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>Page d'authentification</title>
     <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       <?php include("fome.html");?><br><br><br>
            <form  method="post" action="insertionbd.php">
              <div class="box">
                        <h1>~FORMULAIRES~</h1>
                            <div class="inputBox">
                                <input id="Matricule" type="password" name="Matricule"required="">
                                <label>Maticul_ou_Password</label>
                            </div>
                            <div class="inputBox">
                                <input id="prenom" type="text" name="prenom"required="">
                                <label>Prenom</label>
                            </div>
                            <div class="inputBox">
                                <input id="nom" type="text" name="nom" required="">
                                <label>Nom</label>
                            </div> 
                            <div class="inputBox">
                                <input id="tel" type="text" name="tel"required="">
                                <label>Num°_tel</label>
                            </div>
                            <div class="inputBox">
                                <input id="adresse" type="text" name="adresse"required="">
                                <label>Adresse</label>
                            </div> 
                            <div class="inputBox">
                                <input id="email" type="email" name="email"required="">
                                <label for="mel">Adresse_electronique</label>
                            </div><br>
                                <p>Sexe</p><br>
                                <select name="sexe" > 
                            <option value="Homme" >Homme</option>
                            <option value="Femme" >Femme</option>
                        </select><br>
                            <input type="submit" name="Valider">   
               </div>
            <form>
    </body>
 </html>

