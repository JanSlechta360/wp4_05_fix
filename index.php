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
    <title>Zoo</title>
</head>
<body>
<?php  

$Animal[0] = new Dog("Kofola",4,"black");
$Animal[1] = new Cat("Bepsi",4,"white");
$Animal[2] = new Snake("Cola",0,"very dangerous");
$Animal[3] = new Dog("Fanta",4,"white");
$Animal[4] = new Cat("SevenUp",4,"orange");
$Animal[5] = new Snake("Drpeper",0,"harmless");
$Animal[6] = new Dog("Sprite",4,"white with black spots");

    for ($i=0; $i < count($Animal); $i++) { 
        echo "name" . $Animal[$i]->getName() . " | " . "legs" . $Animal$i]->getLegs() . " <br> ";
    }    

?>
</body>
</html>