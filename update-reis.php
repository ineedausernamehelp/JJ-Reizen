
<?php
include_once('comp/header.php');
$id = $_GET["id"];
//$stmt = $conn ->prepare("SELECT landen.country_id as landen_id, landen.name AS land_naam, places.id AS place_id, places.name AS place_naam, reizen.id as reizen_id, reizen.prijs AS prijs, landen.beschrijving as land_beschrijving FROM `reizen` \n"

//. "\n"

//. "INNER JOIN landen ON reizen.land_id = landen.country_id \n"

//. "INNER JOIN places ON reizen.place_id = places.id;");
//$stmt->execute(['reizen_id' => $id]); 
//$user = $stmt->fetch();
$data = $conn->query("SELECT landen.country_id as landen_id, landen.name AS land_naam, places.id AS place_id, places.name AS place_naam, reizen.id as reizen_id, reizen.prijs AS prijs, reizen.beschrijving AS beschrijving FROM `reizen` \n"

. "\n"

. "INNER JOIN landen ON reizen.land_id = landen.country_id \n"

. "INNER JOIN places ON reizen.place_id = places.id;")->fetch();


    if (isset($_POST['edit'])) {
        $land_naam = (isset($_POST['land_naam']) ? $_POST['land_naam'] : '');
        $place_naam = (isset($_POST['place_naam']) ? $_POST['place_naam'] : '');
        $prijs = (isset($_POST['prijs']) ? $_POST['prijs'] : '');
        $bescrhijving = (isset($_POST['beschrijving']) ? $_POST['beschrijving'] : '');



        if ($_POST['prijs'] == "" || $_POST['beschrijving'] == "") {
        } else {
            $sql = "UPDATE reizen SET prijs=?, beschrijving=? WHERE id = ?";
            $stmtt = $conn->prepare($sql);
            $stmtt->execute([$prijs, $bescrhijving, $id]);
        }
    }

//foreach ($data as $row){
    $landen = $conn->query("SELECT * from landen")->fetchall();
    $places = $conn->query("SELECT * from places")->fetchAll();

?>

<form class="contact-container" method="post">
    <h1>edit reis</h1>
    <select id="countries">
        <?php 
        foreach($landen as $land) { ?>
            <option id="land" value="<?php echo $land['country_id']?>" <?php echo ($data['landen_id'] == $land['country_id']? 'selected="selected"' : "");?>><?php echo $land['name']?></option>
        <?php }?>
    </select>
    <select id="places">
        <?php 
        foreach($places as $place) { ?>
            <option id="place" value="<?php echo $place['id']?>" <?php echo ($data['place_id'] == $place['id']? 'selected="selected"' : "");?>><?php echo $place['name']?></option>
        <?php }?>
    </select>
    <input type="text" name="prijs" id="password" class="input-boxes" value="<?php echo $data["prijs"]; ?>">
    <input type="text" name="beschrijving" id="password" class="input-boxes" value="<?php echo $data["beschrijving"]; ?>">
    <input type="hidden" name="id" value="<?php echo $data["reizen_id"]; ?>">
    <input type="submit" value="Submit" name="edit" id="logSubmit">
</form>
<?php //}?>
<script src="scripts/reis-updaten.js"> </script>
<script src="scripts/create-reis.js"> </script>