

function login() {
    var username = document.querySelector('.username').value;
var password = document.querySelector('.password').value;

    // Récupère les valeurs des champs "username" et "password"

    // Vérifie si les champs sont vides
    if (username == "" || password == "") {
        alert("Veuillez remplir tous les champs.");
    
    }
    else{ 
        window.location.href="propositions.html";
    
    }
  
}







