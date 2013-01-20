<!doctype html>

<html>
<title>Vehicle Object Demo Code</title>
<head>
</head>

<body>
<h2>This file contains example code that exercises the Vehicle API.</h2>

<?php
    function __autoload ($class) {
        require($class . '.php'); 
    }

    // Create a new Car
    print '<h3>Exercise the Car Class</h3>';
    $myCar = new Car();
    $myCar->setYear('1995');
    print '<p>I just bought a new '
        .$myCar->getYear().' '
        .$myCar->getName().
        ' </p>';
    print '<p>Cars don\'t honk: '.$myCar->honk().'</p>';

    // Create a new Truck
    print '<h3>Exercise the Truck Class</h3>';
    $myTruck = new Truck();
    $myTruck->setYear('1965');
    print '<p>I just bought a new '
        .$myTruck->getYear().' '
        .$myTruck->getName().
        ' </p>';
    print '<p>Trucks don\'t honk: '.$myTruck->honk().'</p>';

    // Create a new Civic
    print '<h3>Exercise the Civic Class</h3>';
    $myCivic = new Civic();
    $myCivic->setYear('2000');
    print '<p>I just bought a new '
        .$myCivic->getYear().' '
        .$myCivic->getName().
        ' </p>';
    print '<p>'.$myCivic->honk().'</p>';

    // Create a new Civic Coupe
    print '<h3>Exercise the Civic Coupe Class</h3>';
    $myCivicCoupe = new CivicCoupe();
    $myCivicCoupe->setYear('2001');
    print '<p>I just bought a new '
        .$myCivicCoupe->getNumberOfDoors().' door '
        .$myCivicCoupe->getYear().' '
        .$myCivicCoupe->getName().
        ' </p>';
    print '<p>'.$myCivicCoupe->honk().'</p>';

    // Create a new Civic Hatchback
    print '<h3>Exercise the Civic Hatchback Class</h3>';
    $myCivicHatchback = new CivicHatchback();
    $myCivicHatchback->setYear('2011');
    print '<p>I just bought a new '
        .$myCivicHatchback->getNumberOfDoors().' door '
        .$myCivicHatchback->getYear().' '
        .$myCivicHatchback->getName().
        ' </p>';
    print '<p>'.$myCivicHatchback->honk().'</p>';

    // Create a new Silverado
    print '<h3>Exercise the Silverado Class</h3>';
    $mySilverado = new Silverado();
    $mySilverado->setYear('2010');
    print '<p>I just bought a new '
        .$mySilverado->getNumberOfDoors().' door '
        .$mySilverado->getYear().' '
        .$mySilverado->getName().
        ' </p>';
    print '<p>'.$mySilverado->honk().'</p>';

    // Dereference objects
    unset($myCar, $myTruck, $myCivic, $myCivicCoupe, $myCivicHatchback, $mySilverado);
    
?>

</body>
</html>
