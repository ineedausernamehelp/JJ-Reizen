
<body>
    <?php include('comp\header.php'); ?>
    <form action="contact.php"  method="post" class="contact-container">
         <h1>Contact</h1>
        <input type="text" name="naam" placeholder="Naam" id="naam" class="input-boxes">
        <input type="text" name="email" placeholder="Email" id="email" class="input-boxes">
        <input type="text" name="bestemming" placeholder="Bestemming" id="bestemming" class="input-boxes">
        <textarea name="bericht" id="message" cols="30" rows="10" class="input-boxes groot-input-box" placeholder="Uw Bericht"></textarea>
        <input type="submit" value="Submit"  id="submit" class="submit-box">
    </form>
    <script src="scripts/main.js"></script>

    <?php //include('comp/footer.php')?>
</body>
</html>