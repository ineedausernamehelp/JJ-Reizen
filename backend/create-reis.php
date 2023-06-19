<?Php include_once('../comp/PDO.php');

$landen = $conn->query("SELECT * from landen")->fetchall();
$places = $conn->query("SELECT * from places")->fetchAll();
$data = $conn->query("SELECT landen.country_id as landen_id, landen.name AS land_naam, places.id AS place_id, places.name AS place_naam, reizen.id as reizen_id, reizen.prijs AS prijs, reizen.beschrijving AS beschrijving FROM `reizen` \n"

    . "\n"

    . "INNER JOIN landen ON reizen.land_id = landen.country_id \n"

    . "INNER JOIN places ON reizen.place_id = places.id;")->fetch();


if (isset($_POST["create"])) {
    $prijs = (isset($_POST['prijs']) ? $_POST['prijs'] : '');
    $bescrhijving = (isset($_POST['beschrijving']) ? $_POST['beschrijving'] : '');
    $country_id = (isset($_POST['land']) ? $_POST['land'] : '');
    $place_id = (isset($_POST['place']) ? $_POST['place'] : '');

    if ( $_POST['beschrijving'] == "" || $_POST["prijs"] == "") {
    } else {

        $sql = "INSERT INTO reizen(beschrijving, prijs, land_id, place_id) VALUES (?,?,?,?)";

        $conn->prepare($sql)->execute([
            $bescrhijving   ,
            $prijs,
            $country_id,
            $place_id
        ]);
    }
}
?>



    <form class="contact-container" method="post">
        <h1>create reis</h1>
        <link rel="stylesheet" href="../styling/style.css">
        <select id="countries" name="land"  onchange="reisUpdaten();">
            <?php
            foreach ($landen as $land) { ?>
                <option id="land" value="<?php echo $land['country_id'] ?>" <?php //echo ($data['landen_id'] == $land['country_id'] ? 'selected="selected"' : ""); ?>><?php echo $land['name'] ?></option>
            <?php } ?>
        </select>
        <select id="places" name="place">
            <?php
            foreach ($places as $place) { ?>
            
                    <option  id="place" value="<?php echo $place['id'] ?>"  <?php // echo ($data['place_id'] == $place['id'] ? 'selected="selected"' : ""); ?> ><?php echo $place['name'] ?></option>
            <?php } ?>
        </select>
        <input type="text" placeholder="prijs" name="prijs" id="password" class="input-boxes">
        <input type="text" placeholder="beschrijving" name="beschrijving" id="password" class="input-boxes">
        <input type="hidden" name="id">
        <input type="submit" value="Submit" name="create" id="logSubmit">
    </form>
    <?php //}
    ?>
    <script src="../scripts/reis-updaten.js"> </script>