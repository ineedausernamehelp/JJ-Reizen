<?Php include_once('comp/header.php');

if (isset($_POST["submit"])) {
    $bestemming = (isset($_POST["bestemming"]) ? $_POST["bestemming"] : "");
    $prijs = (isset($_POST["prijs"]) ? $_POST["prijs"] : "");
    $beschrijving = (isset($_POST["beschrijving"]) ? $_POST["beschrijving"] : "");

    if ($_POST['bestemming'] == "" || $_POST['beschrijving'] == "" || $_POST["prijs"] == "") {
    } else {

        $sql = "INSERT INTO reizen(bestemming, beschrijving, prijs) VALUES (?,?,?)";

        $conn->prepare($sql)->execute([
            $bestemming,
            $beschrijving,
            $prijs
        ]);
    }
}
?>

<form action="create-reis.php" class="contact-container" method="post">
    <h1>create reis</h1>
    <input type="text" placeholder="bestemming" name="bestemming" id="bestemming" class="input-boxes">
    <input type="text" name="prijs" placeholder="prijs" id="prijs" class="input-boxes">
    <textarea name="beschrijving" id="message" cols="30" rows="10" class="input-boxes groot-input-box" placeholder="beschrijving"></textarea>
    <input type="submit" value="Submit" name="submit" id="submit">
</form>
<script src="scripts/create-reis.js"> </script>