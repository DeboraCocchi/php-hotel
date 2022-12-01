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
  [
      'name' => 'Hotel Rimini',
      'description' => 'Hotel Rimini Descrizione',
      'parking' => true,
      'vote' => 3,
      'distance_to_center' => 0.8
  ],
  ];
  $park = $_GET['parcheggio'];
  $rating = $_GET['voto'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <style>
    body{
      font-family: 'Rubik', sans-serif;
    }
    h1{
      text-align:center;
      margin:20px auto;
      color:cornflowerblue;
    }
    th[scope="col"]{
      color:cornflowerblue;
      font-weight:bold;
      width:calc(100% / 4);
    }
    .dc-table{
      margin:20px auto;
      width: 70%;
    }
    form>div{
      width:70%;
    }
    .dc-sel, .dc-btn, .dc-num{
      width:18%;
      margin:0 18px;
    }
  </style>
  <title>Hotels</title>
</head>
<body>
  <h1>Scegli il tuo Hotel</h1>

  <form  method="GET">
    <div class="m-auto d-flex justify-content-center">
      <select name="parcheggio" class="form-select dc-sel" aria-label="Default select example">
          <option value="" selected>Parcheggio Int.</option>
          <option value="1">Sì</option>
          <option value="0">No</option>
      </select>
      <input type="number" name="voto" class="form-control dc-num" id="exampleFormControlInput1" placeholder="Voto min">
      <button class="btn btn-info dc-btn" type="submit">Invia</button>
      <input class="btn btn-warning dc-btn" type="reset" value="Reset">
    </div>
      
  </form>


  <table class="table table-striped dc-table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Parcheggio Interno</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza dal centro (km)</th>
    </tr>
  </thead>
  <tbody>
  <?php if((empty($park) && empty($rating))){ ;?>
      <?php foreach($hotels as $hotel):?>
        <tr>
        <th scope="row"><?php echo $hotel['name'] ;?></th>
        <td><?php echo ($hotel['parking'])? 'Sì' : 'No';?></td>
        <td><?php echo $hotel['vote'] ?></td>
        <td><?php echo $hotel['distance_to_center'] ;?></td>
        </tr>
      <?php endforeach; ?>
  <?php } else{ ?>
        <?php foreach($hotels as $key => $hotel){?>
          <?php if($hotel['parking']==$park && $hotel['vote']>=$rating) {?>
          <tr>
          <th scope="row"><?php echo $hotel['name'] ;?></th>
          <td><?php echo ($hotel['parking'])? 'Sì' : 'No';?></td>
          <td><?php echo $hotel['vote'] ;?></td>
          <td><?php echo $hotel['distance_to_center'] ;?></td>
          </tr>
      <?php }  }} ?>
      
  
      </tbody>

</body>
</html>