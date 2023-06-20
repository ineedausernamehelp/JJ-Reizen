<?php
include_once('../comp/PDO.php');
$data = $conn->query("SELECT * FROM contact")->fetchAll();

//$data = $conn->query("SELECT * FROM users WHERE id=:id")->fetchAll();
$landen = $conn->query("SELECT * from landen")->fetchall();





if (isset($_POST['delete'])) {
    
        $sql = "DELETE FROM contact WHERE id  = :id";
        $id = $_POST['id'];
        $stmtt = $conn->prepare($sql);
        $stmtt->execute(['id' => intval($id)]);
        header("Location: ../adminPanel.php");

}
    ?>
    



?>
<?php foreach ($data as $row) { ?>
    <form action="" class="contact-container" method="post">
        <h1>zie contact in</h1>
        <link rel="stylesheet" href="../styling/style.css">
        <select id="countries" name="land" onchange="reisUpdaten();">
            <?php
            foreach ($landen as $land) { ?>
                <option id="land" value="<?php echo $land['country_id'] ?>" <?php echo ($row['bestemming'] == $land['name'] ? 'selected="selected"' : ""); ?>><?php echo $land['name'] ?></option>
            <?php } ?>
            <input type="text" name="name" class="input-boxes" id="gbnaam" value="<?php echo $row["naam"]; ?> ">
            <input type="text" class="input-boxes" name="email" id="" value="<?php echo $row["email"]?>">
            <input type="text" class="input-boxes " name="bericht" id="" value="<?php echo $row["bericht"] ?>"> </input>
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <input type="submit" value="delete" name="delete" id="logSubmit">
    </form>
<?php } ?>
<script src="../scripts/reis-updaten.js"> </script>