<?Php include_once('../comp/PDO.php');
$data = $conn->query("SELECT * FROM landen")->fetchAll();




?><table class="table-container">
    <tr>
        <th>Gebruikersnaam</th>
        <th>edit</th>
    </tr>


    <?php
    foreach ($data as $row) { ?>
            <tr>
            <link rel="stylesheet" href="../styling/style.css">
                <td> <?php echo $row['name']; ?></td>
                <input type="hidden" name="delete" id="" value="<?php echo $row['country_id']; ?>">
                <td>  <a href="update-land.php?id=<?php echo $row['country_id']; ?>">update</a> <br> 
                <a href="delete-land.php?id=<?php echo $row['country_id']; ?>">delete</a> </td>
            </tr>
    <?php } ?>
</table>