function updateUsers(){
    var form = document.getElementById("update-users");
    var data = new FormData(form);

    var versturen = new XMLHttpRequest();
    versturen.onreadystatechange = function(){
        if (versturen.readyState === 4 && versturen.status === 200) {
            console.log(versturen.responseText);
          }
    };

    versturen.open("POST", "../users-inzien.php" , true);
    versturen.send(data);
}
