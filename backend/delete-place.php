<?php include_once('../comp/PDO.php');
$id = $_GET["id"];
$stmt = $conn ->prepare("SELECT * FROM places WHERE id=:id");
$stmt->execute(['id' => $id]); 
$user = $stmt->fetch();




    $sql = "DELETE FROM places WHERE id  = :id";
    $stmtt = $conn->prepare($sql);
    $stmtt->execute(['id' => intval($id)]);
    header("Location: places-inzien.php");
?>


