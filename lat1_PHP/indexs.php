<?php
include "soccer.php";


$data = new soccer();
$data->setClub("Persib");
$data->setCountry("Indonesia");
$data->setYear("2019");
$data->setPlayer("Atep");
$data->setStadium("GBK");

echo "Data soccer"."<br>";
echo "<br>";
echo "Club 		: ". $data->getClub() ."<br>";
echo "Country 	: ". $data->getCountry() ."<br>";
echo "Year 		: ". $data->getYear() ."<br>";
echo "Player	: ". $data->getPlayer() ."<br>";
echo "Stadium 	: ". $data->getStadium() ."<br>";

?>