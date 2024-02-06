<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</html>

<?php


spl_autoload_register(function ($class_name) {
    require  $class_name . '.php';
});

$h1 = new Hotel("Hilton",4,"10 rue de la Gare","67000","STRASBOURG");
$ch1 = new Chambre("001",30,2,"wifi",$h1);
$ch2 = new Chambre("002",30,2,"wifi",$h1);
$cl1 = new Client("fouzi","fouzi");

$r1 = new Reservation($cl1,$ch1,"01-02-2024","15-03-2024");

$h1->affNbChambreReserv();
$h1->affNbChambreDispo();
$h1->infoHotel();
