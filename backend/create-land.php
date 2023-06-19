<?Php include_once('../comp/PDO.php');
?>
<?php
    if (isset($_POST["submit"])) {
        $naam = (isset($_POST['naam']) ? $_POST['naam'] : '');
        $beschrijf = (isset($_POST['beschrijving']) ? $_POST['beschrijving'] : '');

        if($_POST['naam'] == "" || $_POST['beschrijving'] == ""){
        }
        else{
            $sql = "INSERT INTO landen (name, beschrijving) VALUES (?,?)";
            $conn->prepare($sql)->execute([
                $naam,
                $beschrijf
            ]); 
        }
    }
?>
<link rel="stylesheet" href="../styling/style.css">
<form class="contact-container" method="post">
    <h1>create land</h1>
    <input type="text" placeholder="naam" name="naam" class="input-boxes" id="gbnaam">
    <input type="text" name="beschrijving" placeholder="beschrijving" id="password" class="input-boxes">
    <input type="submit" value="Submit" name="submit" id="logSubmit">    
</form>
