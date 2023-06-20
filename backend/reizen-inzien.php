<?php 
include_once('../comp/PDO.php');
$data = $conn->query("SELECT landen.country_id as landen_id, landen.name AS land_naam, places.id AS place_id, places.name AS place_naam, reizen.id as reizen_id, reizen.prijs AS prijs FROM `reizen` \n"

. "\n"

. "INNER JOIN landen ON reizen.land_id = landen.country_id \n"

. "INNER JOIN places ON reizen.place_id = places.id;");

?>

<table class="table-container">
    <tr>
        <th>land</th>
        <th>place</th>
        <th>edit</th>
    </tr>


    <?php
    foreach ($data as $row) { ?>
    <link rel="stylesheet" href="../styling/style.css">
            <tr>
                <td> <?php echo $row['land_naam']; ?></td>
                <td> <?php echo $row['place_naam']; ?></td>
                <input type="hidden" name="delete" id="" value="<?php echo $row['reizen_id']; ?>">
                <td>  <a href="update-reis.php?id=<?php echo $row['reizen_id']; ?>">update</a> <br> <a href="delete-reis.php?id=<?php echo $row['reizen_id']; ?>">delete</a> </td>
            </tr>
    <?php } ?>
</table>