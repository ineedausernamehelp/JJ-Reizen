
<?php include('comp\header.php');
if (isset($_SESSION['LOGGED_IN']) && $_SESSION['LOGGED_IN'] == true) {
    header("Location: adminPanel.php");
}   
$data = $conn->query("SELECT * FROM users")->fetchAll(); 

foreach ($data as $row){

        if (isset($_POST['username']) && isset($_POST['password'])){
            if($_POST['username'] == $row['username'] && $_POST['password'] == $row['password']){
                
                $_SESSION['LOGGED_IN'] = true;
                $_SESSION['username'] = $row['username'];
                header("Location: adminPanel.php");
            }
            
            
        }
    }
?>
   <form action="login.php" method="post" class="contact-container">
         <h1>Login-admin</h1>
        <input type="text" name="username" placeholder="Gebruikersnaam" id="gbnaam" class="input-boxes">
        <input type="password" name="password" placeholder="Wachtwoord" id="password" class="input-boxes">
        
        <input type="submit" value="Login"  id="logSubmit" class="submit-box-ad">
  
    </form>
    
    <?php include('comp\footer.php'); ?>
    <script src="scripts/login.js"></script>
