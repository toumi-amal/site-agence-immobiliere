
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png" >
    <title>Immo+</title>
    <link href="new_account.css" rel="stylesheet">
    <script src="new_account.js" defer></script>

</head>
<body>

<div class="border">
        
<span><a href="page acceuil.html"><img src="./images/logo.png" width="130px" height="90px"></a></span>
        <div class="container0">
            <a class="home" href="./page acceuil.html"  >Accueil </a>
            <a class="apropos" href="./a propos.html" >A propos </a>
              <a class="contact" href="./contact.html" >Contact </a>
              <a class="services" href="./login.php" >Se connecter </a>
            </div>
        
     </div>
 <div>

     <div>
        <div class="container10">
        <h2 >Bienvenue sur Immo!</h2>
        <p>  Nous sommes ravis de vous accueillir parmi nos utilisateurs.</p>
        <p> En créant un compte sur notre plateforme, vous pourrez accéder à des milliers de propriétés en vente ou en location dans toute la région.</p>
        <p>  Nous mettons à votre disposition des outils de recherche intuitifs et performants pour vous aider à trouver la propriété idéale qui répondra à vos besoins. </p>
        
        <p>  Inscrivez-vous dès maintenant pour commencer votre recherche immobilière !</p>
    
       </div>
       </div>
   <form action="" method="post" id="form">
        <section id="section1">
           
       <fieldset class="field1">
        <legend style="font-size: larger; font-weight: bold;">Des informations sur le propriétaire</legend>
        <form method="post" action="" id="form">  
        
        <div class="container1">
            
           <div class="ss-container1">
           <label  type="text" > Nom : </label>
           <input class="nom" name="nom" type="text" value="" placeholder="Entrer votre nom" required>
           </div>
           <div class="ss-container1">
           <label type="text" > Prénom : </label>
           <input class="prenom" name="prenom" type="text" value="" placeholder="Entrer votre prénom" required>
           </div>
           
       </div>
       <div class="ss-container1" >
        <label type="text" >Date de naissance:</label>
        <input type="number" name="jour" value="" id="jour" min="1" max="31" placeholder="jour">
        <input type="month" name="mois" value="" id="mois">
        </div>
       <div class="ss-container11">
       <label type="text" > Email :</label>
       <br>
       <input class="email" name="email" value="" type="text" placeholder="Entrer votre Email" required >
       </div>
        
       <div class="ss-container11">
           <label type="text" > Numéro de téléphone : </label>
           <br>
           <input class="telephone"  name="tel"value="" type="text"  placeholder="Entrer votre numéro de téléphone" required>
       </div>
       
       <div class="ss-container11">
           <label type="text" > Adresse : </label>
           <br>
           <input type="text" value="" name="adresse" placeholder="Entrer votre adresse" >
       </div>
       <div class="ss-container11">
        <label type="text" > Nom utilisateur : </label>
        <br>
        <input class="username" name="username"   value="" type="text"  placeholder="Entrer votre nom d'utilisateur" required>
       </div>
       <div class="ss-container11" id="ss">
        <label type="text" > Mot de passe: </label>
        <br>
        <div class="ss-container1" style="margin-top: 30px;">
        <input class="password" name="password" value="" type="password"  placeholder="Entrer votre mot de passe" required>
        <input  class="password2" value="" type="password"  placeholder=" Confirmez  votre mot de passe" required>
        </div>
        
       </div>
       <div class="button1">
               <button class="button" type="submit" value="envoyer" name="button">envoyer</button>
                <input type="reset" class="reset" value="Réinitialiser">
        </div>

    </form>
       </fieldset>
       </section>
    </form>
    <div class="footer"> 
         
           
        <div class="media"> <img src="images/facebook.png" height="30px" width="30px">  Immo+ </div>

         <div class="media"> <img src="images/instagram.png" height="30px" width="30px"> Immo++</div>
          <div class="media"><img src="images/linkedin.png" height="30px" width="30px">  Immo+ </div>
     
          <div class="media"><img src="images/email.png" height="30px" width="30px">  Immo+lamannouba@gomail.com </div>
         <div class="media"> <img src="images/telephone.png" height="30px" width="30px">  55230000/73210444</div>
         <div class="media"> <img src="images/adresse.png" height="30px" width="30px">  La mannouba Av habib bourghiba </div>
     
 </div>


    </body>
</html>

<?php

    $con=mysqli_connect('localhost','root','','immo');

if(isset($_POST['button'])){
    $NOM=$_POST['nom'];
    $PRENOM=$_POST['prenom'];
    $JOUR=$_POST['jour'];
    $MOIS=$_POST['mois'];
    $EMAIL=$_POST['email'];
    $TEL=$_POST['tel'];
    $ADRESSE=$_POST['adresse'];
    $USERNAME=$_POST['username'];
    $PASSWORD=$_POST['password'];

    $sql_query = "SELECT count(*) FROM users WHERE username='".$USERNAME."' ";
    $resultat = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($resultat);
    $count = $row['count(*)'];
    if($count != 0){
        echo "<script>";
        echo 'alert("Nom d utilisateur existe deja! veuillez reessayer !")';
        echo "</script>";
    }
    else {
        $sql="INSERT into `users` (`NOM`,`PRENOM`,`JOUR`,`MOIS`,`EMAIL`,`TEL`,`ADRESSE`,`username`,`password`) values('$NOM','$PRENOM','$JOUR','$MOIS','$EMAIL','$TEL','$ADRESSE','$USERNAME','$PASSWORD')";
        $result = mysqli_query($con, $sql);
        echo "<script>";
        echo 'window.location.href="login.php"';
        echo "</script>";
        
    }

}
?>