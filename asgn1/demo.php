<!doctype html>

<html>
<title>Vehicle Object Demo Code</title>
<head>
</head>

<body>
<?php
    function __autoload ($class) {
        require($class . '.php'); 
    }

    // Create a new Car
    $myCar = new Car();
    $myCar->setYear('1995');
    print '<p>I just bought a new '
        .$myCar->getYear().' '
        .$myCar->getName().
        ' </p>';
    print '<p>Cars don\'t honk: '.$myCar->honk().'</p>';

    // Create a new Truck
    $myTruck = new Truck();
    $myTruck->setYear('1965');
    print '<p>I just bought a new '
        .$myTruck->getYear().' '
        .$myTruck->getName().
        ' </p>';
    print '<p>Trucks don\'t honk: '.$myTruck->honk().'</p>';

    // Create a new Civic
    $myCivic = new Civic();
    $myCivic->setYear('2000');
    print '<p>I just bought a new '
        .$myCivic->getYear().' '
        .$myCivic->getName().
        ' </p>';
    print '<p>'.$myCivic->honk().'</p>';

    // Create a new Civic Coupe
    $myCivicCoupe = new CivicCoupe();
    $myCivicCoupe->setYear('2001');
    print '<p>I just bought a new '
        .$myCivicCoupe->getNumberOfDoors().' door '
        .$myCivicCoupe->getYear().' '
        .$myCivicCoupe->getName().
        ' </p>';
    print '<p>'.$myCivicCoupe->honk().'</p>';

    // Create a new Civic Hatchback
    $myCivicHatchback = new CivicHatchback();
    $myCivicHatchback->setYear('2011');
    print '<p>I just bought a new '
        .$myCivicHatchback->getNumberOfDoors().' door '
        .$myCivicHatchback->getYear().' '
        .$myCivicHatchback->getName().
        ' </p>';
    print '<p>'.$myCivicHatchback->honk().'</p>';

    // Create a new Silverado
    $mySilverado = new Silverado();
    $mySilverado->setYear('2010');
    print '<p>I just bought a new '
        .$mySilverado->getNumberOfDoors().' door '
        .$mySilverado->getYear().' '
        .$mySilverado->getName().
        ' </p>';
    print '<p>'.$mySilverado->honk().'</p>';

    unset($myCar, $myTruck, $myCivic, $myCivicCoupe, $mySilverado);
    
?>

</body>
</html>
