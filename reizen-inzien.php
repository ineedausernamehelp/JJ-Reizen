<?php 
include_once("comp/header.php");
$data = $conn->query("SELECT * FROM reizen")->fetchAll(); ?>

<table class="table-container">
    <tr>
        <th>Bestemming</th>
        <th>land</th>
        <th>edit</th>
    </tr>


    <?php
    foreach ($data as $row) { ?>
            <tr>
                <td> <?php echo $row['bestemming']; ?></td>
                <td> <?php echo $row['bestemming']; ?></td>
                <input type="hidden" name="delete" id="" value="<?php echo $row['id']; ?>">
                <td>  <a href="update-users.php?id=<?php echo $row['id']; ?>">update</a> <br> <a href="delete-user.php?id=<?php echo $row['id']; ?>">delete</a> </td>
            </tr>
    <?php } ?>
</table>