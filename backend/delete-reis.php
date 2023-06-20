<?php include_once('../comp/PDO.php');
$id = $_GET["id"];
$stmt = $conn ->prepare("SELECT * FROM reizen WHERE id=:id");
$stmt->execute(['id' => $id]); 
$user = $stmt->fetch();




    $sql = "DELETE FROM reizen WHERE id  = :id";
    $stmtt = $conn->prepare($sql);
    $stmtt->execute(['id' => intval($id)]);
    header("Location: reizen-inzien.php");
?>


