<?Php include_once('../comp/PDO.php');

$landen = $conn->query("SELECT * from landen")->fetchall();
$data = $conn->query("SELECT landen.country_id as landen_id, landen.name AS land_naam, places.id AS place_id, places.name AS place_naam, reizen.id as reizen_id, reizen.prijs AS prijs, reizen.beschrijving AS beschrijving FROM `reizen` \n"

    . "\n"

    . "INNER JOIN landen ON reizen.land_id = landen.country_id \n"

    . "INNER JOIN places ON reizen.place_id = places.id;")->fetch();


if (isset($_POST["create"])) {
    $name = (isset($_POST['name']) ? $_POST['name'] : '');
    $country_id = (isset($_POST['land']) ? $_POST['land'] : '');

    if ( $_POST["name"] == "" ) {
    } else {

        $sql = "INSERT INTO places( name ,land_id) VALUES (?,?)";

        $conn->prepare($sql)->execute([
            $name,
            $country_id
        ]);
    }
}
?>



    <form class="contact-container" method="post">
        <h1>create place</h1>
        <link rel="stylesheet" href="../styling/style.css">
        <select id="countries" name="land"  onchange="reisUpdaten();">
            <?php
            foreach ($landen as $land) { ?>
                <option id="land" value="<?php echo $land['country_id'] ?>" <?php //echo ($data['landen_id'] == $land['country_id'] ? 'selected="selected"' : ""); ?>><?php echo $land['name'] ?></option>
            <?php } ?>
        <input type="text" name="name" placeholder="place naam" class="input-boxes">

        <input type="submit" value="Submit" name="create" id="logSubmit">
    </form>
    <?php //}
    ?>
    <script src="../scripts/reis-updaten.js"> </script>