function estUneChaineSansChiffres(chaine) {
    
  for(let i=0;i<chaine.length-1;i++){
      if(Number(chaine[i]) in [0,1,2,3,4,5,6,7,8,9]){
          return false;
      }
  }
  return true;
}
function validateEmail(email) {
  // Expression régulière pour valider l'adresse mail
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}
function validatePhone(phone) {
  // Expression régulière pour valider le numéro de téléphone
  var re = /^(\+216)?([0-9]{2})\)?[-]?([0-9]{2})[-]?([0-9]{2})[-]?([0-9]{2})$/;
  return re.test(phone);
} 
function validpassword(password){
  var re = /^[a-zA-Z0-9 ]+$/;
  
  if(password.length>=8 &&  re.test(password)){
      return true;
  }
  else{
      return false;
      
}}





 

  var button=document.querySelector('.button');
    button.addEventListener('click', disableButton);
    function disableButton(event) {

      
    
  var chaine1=document.querySelector('.nom').value;
  var chaine2=document.querySelector('.prenom').value;
  var email=document.querySelector('.email').value;
  var num=document.querySelector('.telephone').value;
var password2=document.querySelector('.password2').value;
var password=document.querySelector('.password').value;

  if (estUneChaineSansChiffres(chaine1)==false || estUneChaineSansChiffres(chaine2)==false){
      alert("nom ou prénom invalide ");
      event.preventDefault();
  } else if(validateEmail(email)==false){
      alert("email invalide");
      event.preventDefault();
    }
    else if(validatePhone(num)==false){
      alert("numéro de télephone invalide");
      event.preventDefault();
      
    } else if(validpassword(password)==false){
      alert("Le mot de passe doit avoir une longueur minimale de 8 caractères et ne doit pas contenir de caractères spéciaux.");
      event.preventDefault();
    }else if(password!=password2){
      alert("La confirmation du mot de passe ne correspond pas au mot de passe saisi. Veuillez réessayer");
      event.preventDefault();
    }

    

  }

  function ok(){
    var chaine1=document.querySelector('.nom').value;
  var chaine2=document.querySelector('.prenom').value;
  var email=document.querySelector('.email').value;
  var num=document.querySelector('.telephone').value;
var password2=document.querySelector('.password2').value;
var password=document.querySelector('.password').value;
    return (estUneChaineSansChiffres(chaine1)&&estUneChaineSansChiffres(chaine2)&&validateEmail(email)&&validatePhone(num)&&validpassword(password)&&password===password2);
  }
