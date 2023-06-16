<?php
include_once('comp/PDO.php');

$country_id = intval($_GET['country_id']);

$places = $conn->query("SELECT * from places WHERE land_id = " . $country_id)->fetchAll();
//$landen = $conn->query("SELECT * from laden WHERE country_id") -> fetchAll();
//$land_id = (isset($_POST["country_id"]) ? $_POST["country_id"] : "");


//foreach($country_id as $land_id){
  //  $addCountry++;
//}

echo json_encode($places);

