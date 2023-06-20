<?php include_once('../comp/PDO.php');
$id = $_GET["id"];
$stmt = $conn ->prepare("SELECT * FROM real_users WHERE id=:id");
$stmt->execute(['id' => $id]); 
$user = $stmt->fetch();




    $sql = "DELETE FROM real_users WHERE id  = :id";
    $stmtt = $conn->prepare($sql);
    $stmtt->execute(['id' => intval($id)]);
    header("Location: rUsers-inzien.php");
?>


