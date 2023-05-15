<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <? include('comp/header.php'); ?>
    <form action="contact.php">
        <input type="text" name="naam" placeholder="name" id="naam">
        <input type="text" name="email" placeholder="email" id="email">
        <input type="text" name="bericht" placeholder="uw-bericht" id="message">
        <input type="submit" value="submit" onclick="checkErrors()" id="submit">
    </form>
    <script src="scripts/main.js"></script>
</body>
</html>