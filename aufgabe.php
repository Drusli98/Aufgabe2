<?php

class Mitarbeiter
{

    private $Vorname;
    private $Nachname;
    public $gehalt;

    public function __construct()
    {
        $this->gehalt = rand(2000, 4000);
        $arr_names = ['Andrew', 'John', 'Michael'];
        $this->Vorname = $arr_names[rand(0, count($arr_names) - 1)];
        $arr_nacnames = ["Silver", 'Gold', 'Bronze'];
        $this->Nachname = $arr_nacnames[rand(0, count($arr_nacnames) - 1)];
        //$this->Mitarbeiters = array_rand([$arr_names, $arr_nacnames]);
    }

    public function showInfo()
    {
        return $this->Vorname . " " . $this->Nachname . ' - ' . 'Gehalt: ' . $this->gehalt . ' $';
    }

}

$mitarbeiter = [];
for ($i = 0; $i < 10; $i++) {
    $mitarbeiter[] = new Mitarbeiter();
    usort($mitarbeiter, function ($a, $b) {
        return strcmp($b->gehalt, $a->gehalt);
    });
}


$newFile = fopen("mitabeiter.txt", "w");

foreach ($mitarbeiter as $mitarbeiters) {
    echo $mitarbeiters->showInfo() . "<br>" . "<br>";
    $newFile_save = fwrite($newFile, $mitarbeiters->showInfo() . PHP_EOL);
}


fclose($newFile);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</body>
</html>