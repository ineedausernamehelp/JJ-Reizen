<?php include_once('../comp/PDO.php');
$id = $_GET["id"];
$stmt = $conn ->prepare("SELECT * FROM landen WHERE country_id=:country_id");
$stmt->execute(['country_id' => $id]); 
$user = $stmt->fetch();




    $sql = "DELETE FROM landen WHERE country_id  = :country_id";
    $stmtt = $conn->prepare($sql);
    $stmtt->execute(['country_id' => intval($id)]);
    header("Location: landen-inzien.php");
?>


