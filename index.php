<?php
require_once "classes/Animal.php";
require_once "classes/Cat.php";
require_once "classes/Dog.php";
require_once "classes/Snake.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP-04</title>
</head>
<body>
<?php  

$computer[0] = new Computer('NZXT');
$computer[1] = new Computer('ZALMAN');

$Animal[0] = new Dog("Jan","Šlechta","jan.slechta@student.ossp.cz");
$Animal[1] = new Animal("Jakub","Vávrů","jakub.vávrů@student.ossp.cz");
$Animal[2] = new Animal("Milan","Ngo","milan.ngo@student.ossp.cz",);¨
$Animal[3] = new Animal("Jan","Šlechta","jan.slechta@student.ossp.cz",);
$Animal[4] = new Animal("Jakub","Vávrů","jakub.vávrů@student.ossp.cz",);
$Animal[5] = new Animal("Milan","Ngo","milan.ngo@student.ossp.cz",);
$Animal[6] = new Animal("Jan","Šlechta","jan.slechta@student.ossp.cz",);

    $computer[0]->addMB('Gibabyte');
    $computer[0]->addRAM('Kingston Fury Beast Black 32GB');
    $computer[0]->addCPU('Intel Core i3-10100');
    $computer[0]->addGPU('3070 rtx');
    $computer[0]->addSSD(1);
    $computer[0]->addPSU('700');
    $computer[0]->connectMouse('razer chroma');

    $computer[1]->addMB('Gibabyte');
    $computer[1]->addRAM('Kingston Fury Beast Black 16GB');
    $computer[1]->addCPU('Intel Core i5-10100');
    $computer[1]->addGPU('3090 rtx');
    $computer[1]->addSSD(1);
    $computer[1]->addPSU('1000');
    $computer[1]->connectMouse('razer chroma');

    $user[0]->assignComputer($computer[0]);
    $user[1]->assignComputer($computer[1]);
    $user[2]->assignComputer($computer[1]);

    for ($i=0; $i < count($user); $i++) { 
        echo $user[$i]->getFirstname() . " | " .  $user[$i]->getLastname() . " | " . $user[$i]->getEmail() . " | " . $user[$i]->getDateofbirth() . " | " . $user[$i]->getGender() . " | "  . $user[$i]->getComputer()-> getRAM() . " | " . $user[$i]->getComputer()-> getCPU() . " | " . $user[$i]->getComputer()-> getGPU() . " | " . $user[$i]->getComputer()-> getSSD() . " | " . $user[$i]->getComputer()-> getPSU() . " | " . $user[$i]->getComputer()-> getMB() . " | " . $user[$i]->getComputer()-> getMouse() . " <br> ";
    }    

?>
</body>
</html>