<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Cancellazione gratuita - senza pagamento anticipato',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
        'path' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=725&q=80'
    ], [
        'name' => 'Hotel Futuro',
        'description' => 'Ideale per il tuo gruppo',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
        'path' => 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Cancellazione gratuita - senza pagamento anticipato',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
        'path' => 'https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
    ], [
        'name' => 'Hotel Bellavista',
        'description' => 'Cancellazione gratuita',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
        'path' => 'https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
    ], [
        'name' => 'Hotel Milano',
        'description' => 'Colazione inclusa',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
        'path' => 'https://images.unsplash.com/photo-1586611292717-f828b167408c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80'
    ]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP Hotel</title>
</head>

<body>
    <header>
        <img src="./img/logo.JPG" alt="logo">
    </header>
    <main>
        <section>
            <?php
                foreach ($hotels as $element) {
                    echo '<div class="hotel">';
                        echo '<img src="' . $element['path'] . 'alt="">';
                        echo '<div class="details">
                            <h2>' . $element['name'] . '</h2>
                            <p>' . $element['distance_to_center'] . ' km dal centro</p>
                            <p> <strong>' . $element['description'] . '</strong> </p>
                            <p>Parcheggio disponibile in struttura: ';
                            if ($element['parking']) {
                                echo 'sì';
                            }
                            else{
                                echo 'no';
                            }
                            echo'</p>
                            <div class="vote"> <span>' . $element['vote'] . '/5</span> </div>
                        </div>';
                    echo '</div>';
                }
                ?>
        </section>
    </main>
</body>

</html>