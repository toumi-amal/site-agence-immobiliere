const images = document.querySelectorAll('.mySlides');

let currentImageIndex = 0;

function nextImage() {
    
  // Afficher l'image suivante
  images[currentImageIndex].classList.add('active');

  images[currentImageIndex].style.display="block";

  
  for(let i=0;i<images.length;i++){
    if(i!=currentImageIndex){
        images[i].style.display="none";

    }
  }

  // Définir un délai de 5 secondes avant de masquer l'image actuelle
  setTimeout(() => {
    images[currentImageIndex].classList.remove('active');
    // Passer à l'image suivante
    currentImageIndex = (currentImageIndex + 1) % images.length;
    nextImage();
  }, 5000);
}

// Démarrer l'animation
nextImage();
