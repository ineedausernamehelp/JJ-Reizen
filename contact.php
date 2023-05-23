<?php include('comp\header.php'); ?>
<?php
if (isset($_POST["conSubmit"])) {
    $naam = (isset($_POST["naam"]) ? $_POST["naam"] : "");
    $email = (isset($_POST["email"]) ? $_POST["email"] : "");
    $bestemming = (isset($_POST["bestemming"]) ? $_POST["bestemming"] : "");
    $bericht = (isset($_POST["bericht"]) ? $_POST["bericht"] : "");

    if ($_POST['naam'] == "" || $_POST['email'] == "" || $_POST["bestemming"] == "" || $_POST["bericht"] == "") {
        $message = "vul velden in";
        echo ($message);
    } else {


        $sql = "INSERT INTO contact(naam, email, bestemming, bericht) VALUES (?,?,?,?)";

        $conn->prepare($sql)->execute([
            $naam,
            $email,
            $bestemming,
            $bericht,
        ]);
    }
}
?>
<form action="contact.php" method="post" class="contact-container">
    <h1>Contact</h1>
    <input type="text" name="naam" placeholder="Naam" id="naam" class="input-boxes">
    <input type="text" name="email" placeholder="Email" id="email" class="input-boxes">
    <input type="text" name="bestemming" placeholder="Bestemming" id="bestemming" class="input-boxes">
    <textarea name="bericht" id="message" cols="30" rows="10" class="input-boxes groot-input-box" placeholder="Uw Bericht"></textarea>
    <input type="submit" value="Submit" id="conSubmit" class="submit-box" name="conSubmit">
</form>


<?php //include('comp/footer.php')
?>
<script src="scripts/contact.js"></script>