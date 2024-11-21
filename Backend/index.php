<?php
include "Aircraft.php";
include "Airport.php";
include "Flight.php";

$manaLidmasina = new Aircraft("Airbus", "A220-300", 120, 850);

$lidosta1 = new Airport("RIX", 56.924, 23.971);
$lidosta2 = new Airport("JFK", 40.6413, -73.7781);
$departureTime = new DateTime();
$flight = new flight("SA503", $lidosta1, $lidosta2, $departureTime, $manaLidmasina);



echo"✈";
var_dump($flight);
echo $flight->getDistance();
echo $flight->getDuration();
