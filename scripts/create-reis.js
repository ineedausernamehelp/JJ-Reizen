document.getElementById("submit").addEventListener("click", function(event){
    //event.preventDefault();
    let prijs = document.getElementById("prijs").value;
    let bestemming = document.getElementById("bestemming").value;
    let message = document.getElementById("message").value;
    console.log(message);
    console.log(prijs);
    console.log(bestemming);
    //contact
    if(prijs == ""|| message == "" || bestemming == ""){
        alert("1 of meerdere velden staan leeg");
    }
  });    