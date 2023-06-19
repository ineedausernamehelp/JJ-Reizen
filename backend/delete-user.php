<?php include_once('../comp/PDO.php');
$id = $_GET["id"];
$stmt = $conn ->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(['id' => $id]); 
$user = $stmt->fetch();




    $sql = "DELETE FROM users WHERE id  = :id";
    $stmtt = $conn->prepare($sql);
    $stmtt->execute(['id' => intval($id)]);
    header("Location: users-inzien.php");
?>


