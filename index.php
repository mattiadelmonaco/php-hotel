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
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
</head>
<body class="bg-dark-subtle">
    <!-- HEADER -->
    <header>
        <h1 class="text-center my-3">LISTA HOTEL</h1>
    </header>
    <!-- /HEADER -->
<!-- MAIN -->
    <main>

    <!-- FORM PER FILTRARE RISULTATO -->

    <section class="container my-3">
        <h3>Filtra risultato per...</h3>
    <form action="" method="GET">
        <label for="checkbox">Disponibilità parcheggio</label>
        <input id="checkbox" name="parking" type="checkbox" >
        <label for="select">Voto</label>
        <select id="select" name="vote" class="border-0">
            <option value="" selected>-</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit" class="border-0">Filtra</button>
    </form>
    </section>

    <?php
        $filteredHotels = [];

        $parkingFilter = isset($_GET['parking']) && $_GET['parking'] === 'on';
        $voteFilter = isset($_GET['vote']) && $_GET['vote'] !== '';

        foreach ($hotels as $hotel) {
            if ($parkingFilter && !$hotel['parking']) {
                continue;
            }

            if ($voteFilter && $hotel['vote'] < $_GET['vote']) {
                continue;
            }

            $filteredHotels[] = $hotel;
        }
    ?>

    <!-- TABELLA CON LISTA HOTEL -->
    <section class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($filteredHotels as $hotel) {
                    if ($hotel["parking"] === true) {
                        $hotel["parking"] = "Disponibile";
                    } else {
                        $hotel["parking"] = "Non disponibile";
                    }
                    echo "<tr>";
                    echo "<td>" . $hotel['name'] . "</td>";
                    echo "<td>" . $hotel['description'] . "</td>";
                    echo "<td>" . $hotel['parking'] . "</td>";
                    echo "<td>" . $hotel['vote'] . "</td>";
                    echo "<td>" . $hotel['distance_to_center'] . " km</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
    </main>
<!-- /MAIN -->

    
</body>
</html>