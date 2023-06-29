var element = document.getElementById(image1);

function changerImage(n) {
 
    switch (n) {
     
    case 1:
    document.getElementById("image1").src="./images/propositions2.png";
    document.getElementById('parag1').style.display='block';

    break;
     
    case 2:
    document.getElementById("image2").src="./images/investissement2.png";
    document.getElementById('parag2').style.display='block';
    break;
    }
    }
    
     
    function remettreImage(n) {
    switch (n) {
     
    case 1:
    document.getElementById("image1").src="./images/propositions.png";
    document.getElementById('parag1').style.display='none';
   
    break;
     
    case 2:
    document.getElementById("image2").src="./images/investissement.png";
    document.getElementById('parag2').style.display='none';
    break;
    }
    }

    
   
    


