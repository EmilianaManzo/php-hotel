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

    // foreach($hotels as $hotel){
    //   $name = $hotel['name'];
    //   $description = $hotel['description'];
    //   $parking = $hotel['parking'];
    //   $vote =$hotel['vote'];
    //   $distance_to_center =$hotel['distance_to_center'];
    // }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>

  <title>PHP Hotel</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col d-flex ">
        <?php foreach($hotels as  $hotel): ?>
        <div class="card">
          <h1><?php echo $hotel['name'] ?></h1>
          <p><?php echo $hotel['description'] ?></p>
          <p>Parcheggio: <?php echo $hotel['parking'] ? 'Si' : 'No' ?></p>
          <p>Voto: <?php echo $hotel['vote'] ?></p>
          <p>Distanza dal centro: <?php echo $hotel['distance_to_center'] ?></p>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</body>
</html>