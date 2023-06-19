<?php include_once('comp/header.php');
if(isset($_SESSION['LOGGED_IN']) && $_SESSION['LOGGED_IN'] == true) {
} else {
    header("Location: login.php");
}
?>
<div class="contact-container">
    <a href="backend/create-reis.php">Create nieuwe reizen</a>
    <a href="backend/reizen-inzien.php">reizen inzien</a>
    <a href="backend/create-land.php">land maken</a>
    <a href="backend/places-inzien.php">places inzien</a>
    <a href="backend/create-place.php">place maken</a>
    <a href="backend/feedback-back.php">bekijk en verwijder feedback</a>
    <a href="backend/add-user.php">User toevoegen</a>
    <a href="backend/users-inzien.php">users inzien</a>
    <a href="comp/logout.php">logout</a>
</div>