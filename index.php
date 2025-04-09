<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>
    <!-- HEADER -->
    <header><h1>LISTA HOTEL</h1></header>
    <!-- /HEADER -->
<!-- MAIN -->
    <main>
    <?php
    foreach ($hotels as $hotel) {

        if ($hotel["parking"] === true) {
            $hotel["parking"] = "Disponibile";
        } else {
            $hotel["parking"] = "Non disponibile";
        }

        // stampare in pagina manualmente i dati di tutti gli hotel

        // echo "<b>Nome: </b>" . $hotel["name"] 
        // .  " <br> <b>Descrizione: </b>" . $hotel["description"] 
        // .  " <br> <b>Disponibilità parcheggio: </b>" . $hotel["parking"] 
        // .  " <br> <b>Voto hotel: </b>" . $hotel["vote"] 
        // .  " <br> <b>Distanza dal centro: </b>" . $hotel["distance_to_center"] . "km"
        // . "<br>";

        // stampare in pagina i dati di tutti gli hotel con un altro foreach

        foreach ($hotel as $key => $value) {
            echo "<b>" . $key . "</b>" . ": " . $value . "<br>";
        }
        echo "<br>";
        
    }

    
    ?>
    </main>
<!-- /MAIN -->

    
</body>
</html>