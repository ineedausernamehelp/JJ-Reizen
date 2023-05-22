document.getElementById("conSubmit").addEventListener("click", function(event){
    event.preventDefault();
    let naam = document.getElementById("naam").value;
    let bestemming = document.getElementById("bestemming").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    console.log(message);
    console.log(email);
    console.log(naam);
    console.log(bestemming);
    //contact
    if(naam == "" || email == "" || message == "" || bestemming == ""){
        alert("1 of meerdere velden staan leeg");
    }
  });    