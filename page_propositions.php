<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="page_propositions.css" rel="stylesheet">
    <title>Immo+</title>
    <link rel="shortcut icon" href="./images/logo.png" >
</head>

<body>
    
    <div class="border">
    <span><a href="page acceuil1.html"><img src="./images/logo.png" width="120px" height="80px"></a></span>
        <div class="container0">
            <div><a href="page acceuil1.html" style="text-decoration: none;color: #4e4e4e; ">Accueil </a></div>
            <a class="apropos" href="a propos1.html" style="text-decoration: none;color: #4e4e4e; ">A propos </a>
              <a class="contact" href="contact1.html" style="text-decoration: none;color: #4e4e4e; ">Contact </a>
              <div class="services"><a href="./page de services.html" style="text-decoration: none;color: #991b38; ">Nos Services </a></div>
              <div class="services"><a href="./logout.php" style="text-decoration: none;color: #4e4e4e; ">Se deconnecter </a></div>
            </div>  
<div style="display:grid; grid-template-column:80% 20%">
         <div class="bienvenue">
            <h1>*** BIENVENUE DANS NOTRE COLLECTION ***</h1>
            <p>Voici une collection variée des proprietés à vendre ou à louer ou se trouve plusieurs propositions 
                mis à votre disposition en se basant sur la bonne qualité des produits et surtout la satisfaction des clients 
            </p>
            
         </div>
         <button style="margin-left:82%;margin-top:-13vh;border:none;background-color:#F5F5DC;"><a style="color:#991b38;text-decoration:none;font-size:30px;" href="page_filtre.html">Filtrer</a></button>
</div>
      <?php
       $con=mysqli_connect('localhost','root','','immo');
       $req = mysqli_query($con, "SELECT * FROM immo");
    ?>
     


<table>
<?php while ($row = mysqli_fetch_assoc($req)): ?>
    <?php 
        $text="";
        if($row["piscine"]==1){
            $text="avec piscine";
        } else {
            $text="sans piscine";
        }
    ?>
    <?php 
        $text1="";
        if($row["garage"]==1){
            $text1="avec garage";
        } else {
            $text1="sans garage";
        }
    ?>
    <?php 
        $text2="";
        if($row["jardin"]==1){
            $text2="avec jardin";
        } else {
            $text2="sans jardin";
        }
    ?>
    <?php 
        $text3="";
        if($row["transaction_type"]=="vente"){
            $text3="Acheter";
        } else {
            $text3="Louer";
        }
    ?>      
    <tr>
        <td style="width:38%;"><?php echo '<img src="images/' . $row["images"] . '" class="my-image">'; ?></td>
        <td>
            <?php echo '<div class="containeer"><div class="type">'.$row["transaction_type"]. '</div><br><div class="type">'.$row["property_type"]. '</div><br><div class="nbpiece">' . $row["nbpiece"] .'</div></div>'; ?>
        </td>
        <td style="width:15%">
            <?php echo '<div class="containeer"><div class="type"> region :'.$row["region"]. '</div><br><div class="nbpiece"> adresse : ' . $row["adresse"] .'</div><br><div class="nbpiece">' . $row["message"] .'</div><br><div class="nbpiece">' . $row["cond"] .'</div><div class="nbpiece">' . $row["duree"] .'</div></div>'; ?>
        </td>
        <td style="width:10%">
            <?php echo '<div class="containeer"><div class="type"> surface:'. $row["surf"] . 'm²</div><br><div class="nbpiece"> prix:' . $row["prix"] .'dt</div></div>'; ?>
        </td>
        <td style="width:10%">
            <?php echo '<div class="containeer"><div class="txt">'.$text. '</div><br><div class="txt">' . $text1 .'</div><br><div class="txt">' . $text2 .'</div></div>'; ?>
        </td>
        <td style="width: 1%;">
            <?php
                $id = $row["id"];
                echo '<button onclick="confirmer(' . $id . ')">' . $text3 . '</button>';
            ?>
        </td>
    </tr>
<?php endwhile; ?>

<script>
    function confirmer(id) {
        var valeur = id;
        var url = "contactc.php?valeur=" + encodeURIComponent(valeur);
        window.location.href = url;
    }
</script>
      
    </tbody>
  </table>


<div class="footer" id="contact"> 
         
           
            <div class="media"> <img src="./images/facebook.png" height="30px" width="30px">  Immo+ </div>
      
             <div class="media"> <img src="./images/instagram.png" height="30px" width="30px"> Immo++</div>
              <div class="media"><img src="./images/linkedin.png" height="30px" width="30px">  Immo+ </div>
         
              <div class="media"><img src="./images/email.png" height="30px" width="30px">  Immo+lamannouba@gomail.com </div>
             <div class="media"> <img src="./images/telephone.png" height="30px" width="30px">  55230000/73210444</div>
             <div class="media"> <img src="./images/adresse.png" height="30px" width="30px">  La mannouba Av habib bourghiba </div>
         
      </div>
      </body>
</html>