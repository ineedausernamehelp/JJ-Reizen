<?php 
include_once("comp/header.php");



if (isset($_POST["create"])) {
    $datum = (isset($_POST['datum']) ? $_POST['datum'] : '');
    $gbnaam = (isset($_POST['user_id']) ? $_POST['user_id'] : '');
    $aantal = (isset($_POST['aantal']) ? $_POST['aantal'] : '');
    $reizen = (isset($_POST['reizen_id']) ? $_POST['reizen_id'] : '');

    if ( $_SESSION['USER_IN'] == false) {
    } else {
        $sql = "INSERT INTO geboekte_r  eizen(datum, user_id, aantal, reis_id) VALUES (?,?,?,?)";
        $q = $conn->prepare($sql);
        $q->execute([
            $datum,
            $gbnaam,
            $aantal,
            $reizen
        ]);
    }
}

$_SESSION['USER_IN'];
$id = $_GET["reizen_id"];
$stmt = $conn ->prepare('SELECT 
landen.country_id as landen_id, 
landen.name AS land_naam, 
places.id AS place_id, 
places.name AS place_naam, 
reizen.id as reizen_id, 
reizen.prijs AS prijs, 
reizen.beschrijving as beschrijving 
FROM reizen 
INNER JOIN landen ON reizen.land_id = landen.country_id 
INNER JOIN places ON reizen.place_id = places.id;
WHERE reizen_id=:reizen_id
")');
$stmt->execute(['reizen_id' => $id]); 
$data = $stmt->fetch();

//$geboekte_reis = $conn->query("SELECT * from landen")->fetchall();
//$stmt->closeCursor();


?>


<form action="" class="contact-container" method="post">
    <h1>boek reis</h1>

    <p><?Php echo $data["land_naam"] ?></p>
    <p><?php echo $data["place_naam"]?></p>
    <p><?php echo "$",  $data["prijs"]?></p>
    <p>begin datum</p>
    <input type="date" value="begin datum" name="datum">
    <input type="text" name="aantal" id="" class="input-boxes" placeholder="aantal">
    <input type="hidden" name="user_id" value="<?Php echo $_SESSION['id'] == true;?>">
    <input type="hidden" name="reizen_id" value="<?php echo $data["reizen_id"]; ?>">
    <input type="submit" value="Submit" name="create" id="logSubmit">
</form>