
<?php include('comp\header.php');
$data = $conn->query("SELECT * FROM users")->fetchAll(); 

foreach ($data as $row){
    if(isset($_POST['submit'])){
        if (isset($_POST['username']) == $row['username'] && isset($_POST['password']) == $row['password']){

            echo('logged in');
            header('Location: adminPanel.php');
        }
    }
}
?>
    <form action="login.php"  method="post" class="contact-container">
         <h1>Login</h1>
        <input type="text" name="username" placeholder="Gebruikersnaam" id="gbnaam" class="input-boxes">
        <input type="password" name="password" placeholder="Wachtwoord" id="password" class="input-boxes">
        <input type="submit" value="Login"  id="logSubmit" class="submit-box">
    </form>
    
    <?php include('comp\footer.php'); ?>
    <script src="scripts/login.js"></script>
