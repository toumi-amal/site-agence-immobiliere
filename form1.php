

<?php 
session_start();
$username = $_SESSION['username'];

    header("Location:validation.html");
    $con=mysqli_connect('localhost','root','','immo');
    if($con){
        echo "BD connecté";
    }
    if(!mysqli_select_db($con,'immo')){
        echo "BD non";
    }
    $bd = mysqli_select_db($con, "immo");
    if($bd){
        echo "connexion à la BD réussie";

    }

        $images = $_FILES['images']['name'];
        $dossier_destination = "C:/xampp/htdocs/cbon/images/".$images;
        move_uploaded_file($_FILES['images']['tmp_name'], $dossier_destination);

        $transaction_type = $_POST['transaction-type'];
        $property_type = $_POST['type-select'];
        $region = $_POST['City'];
        $adresse = $_POST['adresse'];
        $surf = $_POST['surf'];
        $prix = $_POST['prix'];
        $nbpiece = $_POST['nbre_pieces'];
        $piscine = isset($_POST['piscine']) ;
        $jardin = isset($_POST['jardin']);
        $garage = isset($_POST['garage']); 
        $message= $_POST['message'];
        if($transaction_type=="location"){
        $transaction_type="location";
        $duree = $_POST['duree'];
        $cond = $_POST['cond'];
        $sql="INSERT into `immo` (`transaction_type`,`property_type`,`region`,`adresse`,`surf`,`prix`,`nbpiece`,`images`,`piscine`,`jardin`,`garage`,`message`,`duree`,`cond`,`USERNAME`) values('$transaction_type','$property_type','$region','$adresse','$surf','$prix','$nbpiece','$images','$piscine','$jardin','$garage','$message','$duree','$cond','$username')";
        }
        else{
            $duree='';
            $cond='';
            $sql="INSERT into `immo` (`transaction_type`,`property_type`,`region`,`adresse`,`surf`,`prix`,`nbpiece`,`images`,`piscine`,`jardin`,`garage`,`message`,`duree`,`cond`,`USERNAME`) values('$transaction_type','$property_type','$region','$adresse','$surf','$prix','$nbpiece','$images','$piscine','$jardin','$garage','$message','$duree','$cond','$username')";
            

        };
        $result = mysqli_query($con, $sql);
        if ($result){
					// requête exécutée
					echo "Requête correcte";
				}
		else{
					echo "Requête incorrecte"; }
       
?>