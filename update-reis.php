<link rel="stylesheet" href="../styling/style.css" />
<?Php include_once('../comp/header.php')?>
<?Php include_once('../comp/PDO.php')?>
<form action="create-reis.php" class="contact-container">
    <h1>Update reis</h1>
    <input type="text" placeholder="bestemming" name="bestemming" class="input-boxes">
    <input type="text" name="prijs" placeholder="prijs" id="" class="input-boxes">
    <textarea name="beschrijving" id="message" cols="30" rows="10" class="input-boxes groot-input-box" placeholder="beschrijving"></textarea>
    <input type="submit" value="Submit">    
</form>
