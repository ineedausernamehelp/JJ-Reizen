<?php
require_once('comp/header.php');

$data = $conn->query("
        SELECT 
            landen.country_id as landen_id, 
            landen.name AS land_naam, 
            places.id AS place_id, 
            places.name AS place_naam, 
            reizen.id as reizen_id, 
            reizen.prijs AS prijs, 
            reizen.beschrijving as beschrijving 
        FROM reizen 
        INNER JOIN landen ON reizen.land_id = landen.country_id 
        INNER JOIN places ON reizen.place_id = places.id;
")->fetchall();


//var_dump($data);
?>

<?Php foreach($data as $row){  ?>

<div class="bestemmingen-blok">
<div class="bestemmingen-best1">


    <div class="best1-mainblok">

        <h1><?php echo $row['land_naam']  ?> <?php echo $row['place_naam']?></h1>
        <div class="best1-text"> <?php echo $row['beschrijving'] ?></div>
            <div class="best1-sijlblok">
            <div class="best1-euro"> <?php echo $row['prijs'] ?> </div>
            <a href="boeken.php?reizen_id=<?php echo $row['reizen_id']; ?>" class="best1-nu-boek">
                boek
            </a>

                <div>

                </div>

        </div>
   </div>


   <img  class="bast1-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9WYxJ091Vav9hqxR6bDi7tew5RebhFvhgZA&usqp=CAU
    " alt="best1-img" width="550px" height="350px" />
</div>

<?php }?>


<div class="nietTege"></div>
<?php
require_once('comp/footer.php');
?>
