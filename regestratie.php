<?php
require_once('comp/header.php');

?>
<?Php include_once('comp/PDO.php');?>
<?php
    if (isset($_POST["submit"])) {
        $gmail = (isset($_POST['gmail']) ? $_POST['gmail'] : '');
        $username = (isset($_POST['username']) ? $_POST['username'] : '');
        $password = (isset($_POST['password']) ? $_POST['password'] : '');
       
        if($_POST['username'] == "" || $_POST['password'] == ""){
        }
        else{
            $sql = "INSERT INTO real_users ( gmail, username, password) VALUES (?,?,?)";
            $conn->prepare($sql)->execute([
                $gmail,
                $username,
                $password,
            ]); 
        }
    }
?>
<link rel="stylesheet" href="styling/style.css">
<form action="regestratie.php" class="contact-container" method="post">
    <h1>registreer</h1>
    <input type="text" name="gmail" placeholder="gmail" id="gmail" class="input-boxes">
    <input type="text" placeholder="username" name="username" class="input-boxes" id="gbnaam">
    <input type="text" name="password" placeholder="Password" id="password" class="input-boxes">
    <input type="submit" value="gebruiker aanmaaken" name="submit" id="logSubmit">    
</form>
<script src="scripts/login.js"> </script> 
<?php 
require_once('comp/footer.php')
?>
</html>