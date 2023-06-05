document.getElementById("logSubmit").addEventListener("click", function(event){
    let gbnaam = document.getElementById("gbnaam").value;
    let password = document.getElementById("password").value;
    console.log(gbnaam);
    console.log(password);
    //login
    if(gbnaam == "" || password == ""){
        alert("1 of meerdere velden staan leeg");
    }
  });  