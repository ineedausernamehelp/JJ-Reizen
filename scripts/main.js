function checkErrors() {
    let naam = getElementById("naam").value;
    let email = getElementById("email").value;
    let message = getElementById("message").value;
    if(naam == "" || email == "" || message == ""){
        alert("1 of meerdere velden staan leeg")
    }
}