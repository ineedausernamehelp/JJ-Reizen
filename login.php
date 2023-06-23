
<?php include('comp\header.php');
if (isset($_SESSION['USER_IN']) && $_SESSION['USER_IN'] == true) {
    header("Location: index.php");
}   
$data = $conn->query("SELECT * FROM real_users")->fetchAll(); 

foreach ($data as $row){

        if (isset($_POST['username']) && isset($_POST['password'])){
            if($_POST['username'] == $row['username'] && $_POST['password'] == $row['password']){
                
                $_SESSION['USER_IN'] = true;
                $_SESSION['USER_IN'] = $_POST['id'];
                $_SESSION['username'] = $row['username'];
                header("Location: index.php");
            }
            
            
        }
    }
?>
   <form action="login.php" method="post" class="contact-container">
         <h1>Login</h1>
        <input type="text" name="username" placeholder="Gebruikersnaam" id="gbnaam" class="input-boxes">
        <input type="password" name="password" placeholder="Wachtwoord" id="password" class="input-boxes">
        <div class="buttons-naast">
        <div class="geen-acound"><a href="regestratie.php"><p>geen acount?</p></a></div>
        <input type="submit" value="Login"  id="logSubmit" class="submit-box">
        <div class="admin"><a href="login-admin.php"><p>admin</p></a></div></div>
    </form>
    
    <?php include('comp\footer.php'); ?>
    <script src="scripts/login.js"></script>
