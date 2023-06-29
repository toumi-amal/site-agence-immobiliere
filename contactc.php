<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo .png" >
    <title>Immo+</title>
    <link href="form1.css" rel="stylesheet">
</head>

    <style>
      
</style>
<body>
    <div class="border">
    <span><a href="page acceuil1.html"><img src="./images/logo.png" width="130px" height="90px"></a></span>
        <div class="container0">
            <div><a href="./page acceuil1.html" style="text-decoration: none;color: #4e4e4e; ">Accueil </a></div>
            <a class="apropos" href="./a propos1.html" style="text-decoration: none;color: #4e4e4e; ">A propos </a>
              <a class="contact" href="contact1.html" style="text-decoration: none;color: #4e4e4e; ">Contact </a>
              <div class="services"><a href="./page de services.html" style="text-decoration: none;color: #991b38; ">Nos Services </a></div>
              <div class="services"><a href="./logout.php" style="text-decoration: none;color: #4e4e4e; ">Se deconnecter </a></div>
            </div>  

     
   <script>let idd=localStorage.getItem("id")</script>
    <section id="section4" >
        <fieldset class="field4" style="height: 80vh;">
            <legend style="font-size: larger; font-weight: bold;">Vérification</legend>
            <p>Félicitations pour votre récente acquisition ou location ! C'est une étape importante dans votre vie et je suis heureux de pouvoir vous offrir mes meilleurs vœux.</p>
            <p> j'espère que cela vous apportera beaucoup de bonheur et de satisfaction. </p>
            <p> veuillez contacter le proprietaire pour plus d'inforamtion :  </p>
            <p>En cas d'ambiguité, nous sommes a votre entière disposition !</p>
            <?php
if (isset($_GET['valeur'])) {
    $valeur = $_GET['valeur'];
}
?>
            <a style="color:#991b38; " href="mailto:aymen.benamor@ensi-uma.tn?subject=A propos de la propriété de réference '<?php echo $valeur; ?>'">Envoyer un e-mail à l'agence</a>      
            <div class="button1" style="margin-top: 0%; margin-left: -7%;">
                <button  class="boutton" style="margin-top: 70px; margin-left:22vw" onclick="prop()">Propositions</button>
            </div>
        </fieldset>
        </section>


    <div class="footer" id="contact"> 
         
           
        <div class="media"> <img src="./images/facebook.png" height="30px" width="30px">  Immo+ </div>
  
         <div class="media"> <img src="./images/instagram.png" height="30px" width="30px"> Immo++</div>
          <div class="media"><img src="./images/linkedin.png" height="30px" width="30px">  Immo+ </div>
     
          <div class="media"><img src="./images/email.png" height="30px" width="30px">  Immo+lamannouba@gmail.com </div>
         <div class="media"> <img src="./images/telephone.png" height="30px" width="30px">  55230000/73210444</div>
         <div class="media"> <img src="./images/adresse.png" height="30px" width="30px">  La mannouba Av habib bourghiba</div>
     
    </div>
</body>
<script>
function prop(){
   window.location.href="page_propositions.php"
}
</script>

</html>