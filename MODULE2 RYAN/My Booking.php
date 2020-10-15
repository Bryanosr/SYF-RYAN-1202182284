<!DOCTYPE html>
<html>
<body>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

    <title>My Booking</title>
<?php
$duration = $_POST['duration'];
$no = rand(1,1000000);
$name = $_POST['name'];
$in = $_POST['in'];
$out = date("d/m/y", strtotime("+".$duration. "day", strtotime($in)));
$room_type = $_POST['room_type'];
$services = $_POST['services'];
$number = $_POST['number'];
$price;
if ($room_type == 'Standard'){
$price = $duration* 90;
}
else if ($room_type == 'luxury'){
$price = $duration* 150;    
}
else if ($room_type == 'Superior'){
$price = $duration* 200;    
}
?>
<div class="container-sm">
<h4 style="text-align: center;">Home Booking</h4>
<fieldset>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Booking Number</th>
      <th scope="col">Name</th>
      <th scope="col">Check-in</th>
      <th scope="col">Check-out</th>
      <th scope="col">Room Type</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Services</th>
      <th scope="col">Total Price</th>
    </tr>
    </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $no?></th>
      <td> <?= $name?></td>
      <td><?= $in?></td>
      <td><?= $out?></td>
      <td><?= $room_type?></td>
      <td><?= $number?></td>
      <td >
      <ul> <?php
      foreach ($services as $value ){
        ?> 
        <li>  <?= $value?></li>
         <?php 
        }
        ?>
        </ul>
      </td>
      <td><?= $price?></td>
    </tr>
  </tbody>
</table>
</fieldset>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>