
<?Php include_once('comp/header.php')?>
<?php
    if (isset($_POST["submit"])) {
        $username = (isset($_POST['username']) ? $_POST['username'] : '');
        $password = (isset($_POST['password']) ? $_POST['password'] : '');

        if($_POST['username'] == "" || $_POST['password'] == ""){
        }
        else{
            $sql = "INSERT INTO users (username, password) VALUES (?,?)";
            $conn->prepare($sql)->execute([
                $username,
                $password,
            ]); 
        }
    }
?>
<form action="add-user.php" class="contact-container" method="post">
    <h1>create user</h1>
    <input type="text" placeholder="username" name="username" class="input-boxes" id="gbnaam">
    <input type="text" name="password" placeholder="Password" id="password" class="input-boxes">
    <input type="submit" value="Submit" name="submit" id="logSubmit">    
</form>
<script src="scripts/login.js"> </script> 