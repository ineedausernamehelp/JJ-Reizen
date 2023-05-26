<?php include_once('comp/header.php');
if(isset($_SESSION['LOGGED_IN']) && $_SESSION['LOGGED_IN'] == true) {
} else {
    header("Location: login.php");
}
?>
<div class="contact-container">
    <a href="geboekte-reizen.php">bekijk en verwijder geboekte reizen </a>
    <a href="create-reis.php">Create nieuwe reizen</a>
    <a href="update-reis.php">update reizen</a>
    <a href="delete-reis.php">delete reizen</a>
    <a href="feedback-back.php">bekijk en verwijder feedback</a>
    <a href="add-user.php">User toevoegen</a>
    <a href="del-user.php">User verwijderen</a>
    <a href="comp/logout.php">logout</a>
</div>