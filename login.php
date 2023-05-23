
<?php ?>
<?php include('comp\header.php'); ?>
    <form action="login.php"  method="post" class="contact-container">
         <h1>Login</h1>
        <input type="text" name="username" placeholder="Gebruikersnaam" id="gbnaam" class="input-boxes">
        <input type="password" name="password" placeholder="Wachtwoord" id="password" class="input-boxes">
        <input type="submit" value="Login"  id="logSubmit" class="submit-box">
    </form>
    
    <?php include('comp\footer.php'); ?>
    <script src="scripts/login.js"></script>
