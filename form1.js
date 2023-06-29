
    
    let i=0
    let ok=0
    let k=145;
    function selectLocation(){
    let location=document.querySelector("#location");
    let vente=document.querySelector("#vente");
    let parent=document.querySelector(".container2")
    let field=document.querySelector(".field2")
    location.setAttribute('checked', 'checked');
    let button=document.querySelector(".button1")
    let parentbutton=button.parentElement
    let form=document.querySelector("form");
    if(i<1){
        button.remove();
        parent.parentElement.innerHTML+='<div class="new"><div><label type="text" class="duree1"> Durée de la location  : </label><input type="text" class="duree" name="duree" placeholder="Quelle est la durée de la location estimée ?" required></div><div><label type="text" class="cond1"> Conditions de location : </label><input type="text" class="cond" name="cond" placeholder="Quelles sont les conditions de location exigées ?" required class="quest2"></div></div>'
        ok=1;
        field.style.height=`${k+120}vh`;
        field.style.display="flex";
        field.style.flexDirection="column"
        field.style.gap="10.1vh"
        parentbutton.appendChild(button)
        form.style.height="290vh"

    }
    }

    function selectVente(){
    let location=document.querySelector("#location");
    let vente=document.querySelector("#vente");
    let parent=document.querySelector(".container2")
    let field=document.querySelector(".field2")
    let form=document.querySelector("form");
    
    vente.setAttribute('checked', 'checked');

    if (ok){
        const child=parent=document.querySelector(".new")
        child.remove()
        field.style.height=`${k+75}vh`;
        form.style.height="240vh"
        
        

    }
    }
    

    


     

   
