<?php

session_start(); 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $con=mysqli_connect('localhost','root','','immo');
if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: login.php?error=User Name is required");
        exit();

    }else if(empty($password)){
            header("Location: login.php?error=Password is required");
        exit();

    }
    
    else {

        $sql_query = "SELECT count(*) FROM users WHERE username='".$username."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['count(*)'];
        if($count != 0){
            $_SESSION['username'] = $username;
            header("location: page de services.html?username=".$username);

        }else{
            echo "<script>" . "alert('Nom d\'utilisateur ou mot de passe incorrect.');" . "</script>";
        }

    }
    }

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" rel="stylesheet">
    <title>Immo+</title>
    <link rel="shortcut icon" href="./images/logo.png" >
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

<div class="page">
         <div class="bienvenue">
            
            
            <h2 style="margin-top: 200px; margin-left: 110px; color: #991b38;"> BIENVENUE DANS NOTRE AGENCE </h2>
            <p style="font-size: 25px; margin-left: 180px; ">Connectez-vous dès maintenant pour découvrir nos dernières offres immobilières et trouver votre prochaine propriété de rêve. Nous sommes là pour vous aider à chaque étape du processus. N'hésitez pas à nous contacter
                 si vous avez des questions ou des besoins spécifiques. Trouvez votre nouveau chez-vous dès maintenant !
            </p>
         </div>
         <div class="login" >
            <p style="font-size: 50px; font-weight: bolder; padding-top: 50px;"> Connectez-vous <p>
                <?php if(isset($error)): ?>
                <div><?php echo $error; ?></div> <!-- Affiche le message d'erreur si l'authentification échoue -->
                <?php endif; ?>
                <form  onsubmit="return login();" method="post">
            <input   class="username" type="text" name="username" placeholder="nom utilisateur" required style="margin-left: 160px; padding-left: 20px; ">
           
            <input  class="password" type="password" name="password"  placeholder="mot de passe" required style="margin-left: 160px; padding-left: 20px; ">
            <br>
            <input class="boutton" type="submit" value="connexion" name="login">
        </form>
        
           
            <br>
            <br>
            <a href="new_account.php" style="text-decoration:none;color:#991b38;margin-left:160px; font-size: 20px; text-decoration: underline;"> creé un nouveau compte </a>
          </div>  
         </div>
         
<script src="login.js"></script>
   
</body>
</html>