<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Connexion eventour</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/mycss.css" />
    </head>
    <body>
        
     
       <div id="start">
       <a href="file:///C:/Users/Benigro%27s/Documents/NetBeansProjects/PhpWeb/Connexion.php">Connexion</a></li>
   <a href="file:///C:/Users/Benigro%27s/Documents/NetBeansProjects/PhpWeb/inscription.php">Inscription</a></li>
</div>
        <br/>
             
           <header id='header'>
       <nav id="nav">
  <a href="file:///C:/Users/Benigro%27s/Documents/NetBeansProjects/PhpWeb/Accueil.php">Accueil</a></li>
   <a href="file:///C:/Users/Benigro%27s/Documents/NetBeansProjects/PhpWeb/Créerevent.php">Créer un évènement</a></li>
   <a href="file:///C:/Users/Benigro%27s/Documents/NetBeansProjects/PhpWeb/RechercheEvent.php">Rechercher un évènement</a></li>
 <a href="file:///C:/Users/Benigro%27s/Documents/NetBeansProjects/PhpWeb/RechercheGroupe.php">Rechercher un groupe</a></li>
<a href="file:///C:/Users/Benigro%27s/Documents/NetBeansProjects/PhpWeb/Profil.php">Mon profil</a></li>
</nav>
           </header>

        <h1>Connexion</h1>
       <form method="post" action="traitementco.php">
           <fieldset>
               
            <label for="Prénom">Prénom</label> : <input type="text" name="Prénom" id="Prénom" placeholder="Carl" required/><br/><br/>
           <label for="adresse">Identifiant(adresse électronique)</label> : <input type="email" name="adresse" id="adresse"  required/><br/><br/>
           <label for="mdp">Mot de passe</label> : <input type="password" name="mdp" id="mdp"  required/><br/><br/>
           </fieldset>
           <input type="submit" value="Connexion" />
       </form>
    </body>
</html>
