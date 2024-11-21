<?php
class Flight{
    public function __construct(public $lidojumakods,
                                public $izlidosta,
                                public $galidosta,
                                public $laiks){
    }
    public function getDistance(){
        return "Get distance strada";
    }
    public function getDuration(){
        $attalums = $this->getDistance();
        $atrums = $this->aircraft->atrums;

    }


}
class Flight {
    private $distance; // Attālums lidojumam kilometros
    private $averageSpeed; // Vidējais ātrums kilometros stundā

    public function __construct($distance, $averageSpeed) {
        $this->distance = $distance;
        $this->averageSpeed = $averageSpeed;
    }

    public function getDuration() {
        // Aprēķina lidojuma ilgumu stundās
        $flightTime = $this->distance / $this->averageSpeed;

        // Pārvērš minūtēs un pievieno 30 minūtes
        $totalDuration = ($flightTime * 60) + 30;

        return round($totalDuration); // Noapaļo, ja nepieciešams
    }
}

// Piemēra izmantošana
$flight = new Flight(600, 300); // 600 km attālums, 300 km/h vidējais ātrums
echo $flight->getDuration(); // Atgriež 150
