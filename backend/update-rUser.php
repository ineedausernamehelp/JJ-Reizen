<?php
include_once('../comp/PDO.php');
$id = $_GET["id"];
$stmt = $conn ->prepare("SELECT * FROM real_users WHERE id=:id");
$stmt->execute(['id' => $id]); 
$user = $stmt->fetch();
//$data = $conn->query("SELECT * FROM users WHERE id=:id")->fetchAll();


    if (isset($_POST['edit'])) {
        $password = (isset($_POST['wachtwoord']) ? $_POST['wachtwoord'] : '');
        $gebruikersnaam = (isset($_POST['gebruikersnaam']) ? $_POST['gebruikersnaam'] : '');



        if ($_POST['gebruikersnaam'] == "" || $_POST['wachtwoord'] == "") {
        } else {
            $sql = "UPDATE real_users SET gebruikersnaam=?, wachtwoord=? WHERE id = ?";
            $stmtt = $conn->prepare($sql);
            $stmtt->execute([$gebruikersnaam, $password, $id]);
        }
    }

//foreach ($data as $row){


?>

<form action="" class="contact-container" method="post">
    <h1>edit user</h1>
    <link rel="stylesheet" href="../styling/style.css">
    <input type="text" name="gebruikersnaam" class="input-boxes" id="gbnaam" value="<?php echo $user["gebruikersnaam"]; ?> ">    
    <input type="text" name="wachtwoord" id="password" class="input-boxes" value="<?php echo $user["wachtwoord"]; ?>">
    <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
    <input type="submit" value="Submit" name="edit" id="logSubmit">
</form>
<?php //}?>
<script src="scripts/login.js"> </script>