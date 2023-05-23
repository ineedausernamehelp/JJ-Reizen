
<?Php include_once('comp/header.php');
if(isset($_POST['submit'])){
    $bestemming = (isset($_POST['bestemming']) ? $_POST['bestemming'] : '');
    $prijs = (isset($_POST['prijs']) ? $_POST['prijs'] : '');
    $beschrijving = (isset($_POST['beschrijving']) ? $_POST['beschrijving'] : '');
    $id = (isset($_POST['id']) ? intval($_POST['id']) : 0);



    if($_POST['bestemming'] == "" || $_POST['prijs'] == "" || $_POST['beschrijving'] == ""){

    }
    else{
        $sql = "UPDATE reizen SET bestemming=?, prijs=?, beschrijving=? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$bestemming, $prijs, $beschrijving, $id]);
    }

}






$data = $conn->query("SELECT * FROM reizen")->fetchAll();
?>

<?php foreach ($data as $row){ ?>
        <form action="update-reis.php" class="contact-container" method="post">
        <h1>Update reis</h1>
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <input value="<?Php echo $row['bestemming']?>" type="text" placeholder="bestemming" name="bestemming" class="input-boxes">
        <input value="<?php echo $row['prijs'] ?>" type="text" name="prijs" placeholder="prijs" id="" class="input-boxes">
        <textarea  name="beschrijving" id="message"  cols="30" rows="10" class="input-boxes groot-input-box" placeholder="<?php echo $row['beschrijving'] ?>"></textarea>
        <input type="submit" value="Submit" name="submit">    
        </form>
    <?php }?>

    <script src='scripts/create-reis.js'>
