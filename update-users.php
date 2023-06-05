<?php
include_once('comp/header.php');
$id = $_GET["id"];
$stmt = $conn ->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(['id' => $id]); 
$user = $stmt->fetch();
//$data = $conn->query("SELECT * FROM users WHERE id=:id")->fetchAll();


    if (isset($_POST['edit'])) {
        $password = (isset($_POST['password']) ? $_POST['password'] : '');
        $username = (isset($_POST['username']) ? $_POST['username'] : '');



        if ($_POST['username'] == "" || $_POST['password'] == "") {
        } else {
            $sql = "UPDATE users SET username=?, password=? WHERE id = ?";
            $stmtt = $conn->prepare($sql);
            $stmtt->execute([$username, $password, $id]);
        }
    }

//foreach ($data as $row){


?>

<form action="" class="contact-container" method="post">
    <h1>edit user</h1>
    <input type="text" name="username" class="input-boxes" id="gbnaam" value="<?php echo $user["username"]; ?> ">    
    <input type="text" name="password" id="password" class="input-boxes" value="<?php echo $user["password"]; ?>">
    <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
    <input type="submit" value="Submit" name="edit" id="logSubmit">
</form>
<?php //}?>
<script src="scripts/login.js"> </script>