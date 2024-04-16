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

    $vote = isset($_GET['vote']) ? $_GET['vote'] : 0;
    
    if(!isset($_GET['parking'])){
      foreach($hotels as $hotel){
        if($hotel['vote'] >= $vote){
          $filtered_hotels[] = $hotel;
        }
      }
    }else{
      foreach($hotels as $hotel){
        if($hotel['parking'] && $hotel['vote'] >= $vote){
          $filtered_hotels[] = $hotel;
        }
      }
    }
    
  

  
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
  <div class="container p-5 ">
    <div class="row mb-3 ">
      <h1>HOTELS</h1>
    </div>

    <div class="row mb-3 ">
      <form action="index.php" method="GET">
        <div class="d-flex">

        <div class="me-5">
            <input class="form-check-input" type="checkbox" id="parking" name="parking">
            <label class="form-check-label" for="parking">
              Solo con parcheggio
            </label>
          </div>
          <div>
            
          Voto: 
            <?php for($i = 0; $i <= 5; $i++): ?>
              <input class="form-check-input" type="radio" name="vote" id="vote<?php echo $i ?>" value="<?php echo $i ?>">
              <label class="form-check-label me-3" for="vote<?php echo $i ?>"> <?php echo $i ?> </label>
            <?php endfor; ?>

          </div>

          <button type="submit" class="btn btn-primary ">Cerca</button>
        </div>
        
      </form>
    </div>

    <div class="row">

      
      <?php foreach($filtered_hotels as  $hotel): ?>
      <div class="col d-flex ">
        <div class="card p-3">
          <h1><?php echo $hotel['name'] ?></h1>
          <p><?php echo $hotel['description'] ?></p>
          <p>Parcheggio: <?php echo $hotel['parking'] ? 'Si' : 'No' ?></p>
          <p>Voto: <?php echo $hotel['vote'] ?></p>
          <p>Distanza dal centro: <?php echo $hotel['distance_to_center'] ?> km</p>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>