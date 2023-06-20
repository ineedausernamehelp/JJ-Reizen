<?Php include_once('../comp/PDO.php');
$data = $conn->query("SELECT * FROM real_users")->fetchAll();




?><table class="table-container">
    <tr>
        <th>Gebruikersnaam</th>
        <th>edit</th>
    </tr>


    <?php
    foreach ($data as $row) { ?>
            <tr>
            <link rel="stylesheet" href="../styling/style.css">
                <td> <?php echo $row['gebruikersnaam']; ?></td>
                <input type="hidden" name="delete" id="" value="<?php echo $row['id']; ?>">
                <td>  <a href="update-rUser.php?id=<?php echo $row['id']; ?>">update</a> <br> <a href="delete-rUser.php?id=<?php echo $row['id']; ?>">delete</a> </td>
            </tr>
    <?php } ?>
</table>