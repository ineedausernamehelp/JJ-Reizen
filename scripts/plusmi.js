
function plus1() {
  
    const plus1 = document.getElementById("plus1");
    const info1 = document.getElementById("informatie");
    info1.classList.toggle('hide')
    if (plus1.innerHTML === "+"){
        plus1.innerHTML = "-";
    }else{
        plus1.innerHTML = "+";
    }



}

function toggleClass() {
        
        const plus2 = document.getElementById("plus2");
          const info2 = document.getElementById("informatie2");
          info2.classList.toggle('hide')
    if (plus2.innerHTML === "+"){
        plus2.innerHTML = "-";
    }else{
        plus2.innerHTML = "+";
    }
    info2.innerHTML = "test";

        
    
 }
    

