<?php
include_once('../comp/PDO.php');
$id = $_GET["id"];
$stmt = $conn ->prepare("SELECT * FROM places WHERE id=:id");
$stmt->execute(['id' => $id]); 
$place = $stmt->fetch();
//$data = $conn->query("SELECT * FROM users WHERE id=:id")->fetchAll();
$landen = $conn->query("SELECT * from landen")->fetchall();





    if (isset($_POST['edit'])) {
        $name = (isset($_POST['name']) ? $_POST['name'] : '');
        $country_id = (isset($_POST['land']) ? $_POST['land'] : '');


        if ($_POST['name'] == "") {
        } else {
            $sql = "UPDATE places SET name=?, land_id=? WHERE id = ?";
            $stmtt = $conn->prepare($sql);
            $stmtt->execute([$name, $country_id, $id]);
        }
    }

//foreach ($data as $row){


?>

<form action="" class="contact-container" method="post">
    <h1>edit place</h1>
    <link rel="stylesheet" href="../styling/style.css">
     <select id="countries" name="land"  onchange="reisUpdaten();">
            <?php
            foreach ($landen as $land) { ?>
                <option id="land" value="<?php echo $land['country_id'] ?>" <?php //echo ($data['landen_id'] == $land['country_id'] ? 'selected="selected"' : ""); ?>><?php echo $land['name'] ?></option>
            <?php } ?>
    <input type="text" name="name" class="input-boxes" id="gbnaam" value="<?php echo $place["name"]; ?> ">    
    <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
    <input type="submit" value="Submit" name="edit" id="logSubmit">
</form>
<?php //}?>
<script src="../scripts/reis-updaten.js"> </script>