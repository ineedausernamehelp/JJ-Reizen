
function plus1() {
  
    const plus1 = document.getElementById("plus1");
    const info1 = document.getElementById("copyrightploe");
    
    if (plus1.innerHTML === "+"){
        plus1.innerHTML = "-";
        info1.style.display = "block";
    }else{
        plus1.innerHTML = "+";
        info1.style.display = "none";
    }



}

function toggleClass() {
        
        const plus2 = document.getElementById("plus2");
          const info2 = document.getElementById("privacypole");

    if (plus2.innerHTML === "+"){
        plus2.innerHTML = "-";
        info2.style.display = "block";
    }else{
        plus2.innerHTML = "+";
        info2.style.display = "none";
    }
    

   
    
 }
    

