Vehicle Implementation
======================

    WEBLAMP442
    Assignment 1
    Lisa Henry

The files in this directory implement a set of classes that can be used 
to create vehicle objects, and an interface that defines required methods.

Example code can be found in demo.php.

Installing dependencies
=======================

Tests for this API are dependent on the PHPUnit package. It can be 
installed using Composer by running:

% composer update

Running Tests
=============

PHPUnit tests are found in Tests/Src. The PHPUnit configuration file
is Tests/phpunit.xml. 

Once you've installed phpunit, run the tests as follows from the main
project directory:

Run all tests:
--------------
% phpunit --debug -c Tests/phpunit.xml --verbose --testsuite Vehicle

or 

% phpunit --debug -c Tests/phpunit.xml --verbose --coverage-html coverage_report Tests/Src

Run tests in the Car suite:
---------------------------
phpunit --debug -c Tests/phpunit.xml --verbose --testsuite Car

Run tests in the Truck suite:
---------------------------
phpunit --debug -c Tests/phpunit.xml --verbose --testsuite Truck


phpunit --debug -c Tests/phpunit.xml --verbose --coverage-html coverage_report --testsuite Vehicle

