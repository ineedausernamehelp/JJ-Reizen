<?php
include_once('../comp/PDO.php');
$id = $_GET["id"];
$stmt = $conn ->prepare("SELECT * FROM landen WHERE country_id=:country_id");
$stmt->execute(['country_id' => $id]); 
$land = $stmt->fetch();


    if (isset($_POST['edit'])) {
        $name = (isset($_POST['name']) ? $_POST['name'] : '');
        $beschrijving = (isset($_POST['beschrijving']) ? $_POST['beschrijving'] : '');



        if ($_POST['name'] == "" || $_POST['beschrijving'] == "") {
        } else {
            $sql = "UPDATE landen SET name=?, beschrijving=? WHERE country_id = ?";
            $stmtt = $conn->prepare($sql);
            $stmtt->execute([$name, $beschrijving, $id]);
            header("Location: landen-inzien.php");
        }
    }

//foreach ($data as $row){


?>

<form action="" class="contact-container" method="post">
    <h1>edit user</h1>
    <link rel="stylesheet" href="../styling/style.css">
    <input type="text" name="name" class="input-boxes" id="gbnaam" value="<?php echo $land["name"]; ?> ">    
    <input type="text" name="beschrijving" id="password" class="input-boxes groot-input-box" value="<?php echo $land["beschrijving"]; ?>">
    <input type="hidden" name="id" value="<?php echo $land["country_id"]; ?>">
    <input type="submit" value="Submit" name="edit" id="logSubmit">
</form>
<?php //}?>
<script src="scripts/login.js"> </script>