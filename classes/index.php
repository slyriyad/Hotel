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
        p  {
            background: #32D296;
            color: white;
            margin:0% 90% 0% 0%; 
            text-align: center;
            border-radius: 8px;
        }
        .etat1{
            background: #32D296;
            color: white;
            margin:0% 70% 0% 0%; 
            text-align: center;
            border-radius: 8px;
        }
        .etat2 {
            background: #F0506E;
            color: white;
            margin:0% 75% 0% 0%; 
            text-align: center;
            border-radius: 8px;
        }


        table {
            width: 100%;
        }
        tr {
            height: 10%;
        }
        tbody tr:nth-child(odd){
            background-color: #EDE9E9;
        }
        td {
            letter-spacing: 1px;
            
            }

            tbody td {
            text-align: center;
            
            }
        </style>

</html>

<?php


spl_autoload_register(function ($class_name) {
    require  $class_name . '.php';
});

$h1 = new Hotel("Hilton",4,"10 rue de la Gare","67000","STRASBOURG");
$ch1 = new Chambre("001",30,2,"oui",$h1);
$ch2 = new Chambre("002",30,2,"non",$h1);
$cl1 = new Client("fouzi","riyad");

$r1 = new Reservation($cl1,$ch1,"01-02-2024","04-02-2024"); // 90
// $r2 = new Reservation($cl1,$ch2,"15-02-2024","17-02-2024"); // 60 
$h1->getNbChambresReserv();
$h1->getNbChambresDispo();
$h1->affInfosHotel();
echo $cl1->affInfoResaclient();
$h1->statutsChambres();
$ch1->afficherEtat();

