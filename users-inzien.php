<?Php include_once('comp/header.php');
$data = $conn->query("SELECT * FROM users")->fetchAll();
?><table class="table-container">
    <tr>
        <th>Gebruikersnaam</th>
        <th>Wachtwoord</th>
        <th>edit</th>
    </tr>
    <?php
    foreach ($data as $row) { ?>
        <tr>
            <td><?php echo $row['username']; ?></td>
            <td> <?php echo $row['password']; ?></td>
            <td><a href="">edit</a> <br> <a href="">delete</a></td>
        </tr>
    <?php } ?>
</table>