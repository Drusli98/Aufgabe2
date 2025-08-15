<?php

class Attributen
{
    public $Räder;
    public $Ausenspiegel;
    public $Motor;
    public $Pedale;

    public $Geschwendigkeit;

    public $Transport;

    public function __construct($Transport, $Räder, $Ausenspiegel, $Motor, $Pedale, $Geschwendigkeit)
    {
        $this->Transport = $Transport;
        $this->Räder = $Räder;
        $this->Ausenspiegel = $Ausenspiegel;
        $this->Motor = $Motor;
        $this->Pedale = $Pedale;
        $this->Geschwendigkeit = $Geschwendigkeit;
    }


}

$auto = new Attributen('Auto', 4, 2, true, true, '100-350 km/h');
$motorad = new Attributen('Motorrad', 2, 2, true, true, '10-250 km/h');
$fahhrad = new Attributen('Fahhrad', rand(2, 4), 2, false, true, '10-35 km/h');
$ebike = new Attributen('Ebike', 2, 2, true, true, '20-40 km/h');

$transport = [$auto, $motorad, $fahhrad, $ebike,];

foreach ($transport as $key) {
    echo $key->Transport . "<br>";
    echo 'Räder: ', $key->Räder, "<br>";
    echo 'Ausenspiegel: ', $key->Ausenspiegel . " " . "<br>";
    echo 'Motor: ', $key->Motor ? 'hat' : 'keiner', "  ", "<br>";
    echo 'Geschwendigkeit: ', $key->Geschwendigkeit, "<br>";
    echo 'Pedale: ', $key->Pedale ? 'hat' : 'keine', "<br>" . "<br>";
}
?>