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
$no = $_GET['no'];
$name = $_GET['name'];
$in = $_GET['in'];
$out = $_GET['out'];
$room_type = $_GET['room_type'];
$services = $_GET['services'];
$number = $_GET['number'];
$price = $_GET['price'];
?>
<div class="container-sm">
<h4 style="text-align: center;">Home Booking</h4>
<fieldset>
<table class="table">
            <tr>
                <th>Booking Number</th>
                <th><?= $no ?></th>

            </tr>
            <tr>
                <td>678497</td>
                <td><?= $no ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <th><?= $name ?></th>
            </tr>
            <tr>
                <td>Ikhsan</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <th>Check-in</th>
                <th><?= $in ?></th>
            </tr>
            <tr>
                <td>17/10/2020</td>
                <td><?= $in ?></td>
            </tr>
            <tr>
                <th>Check-out</th>
                <th><?= $out ?></th>
            </tr>
            <tr>
                <td>19/10/2020</td>
                <td><?= $out ?></td>
            </tr>
            <tr>
                <th>Room Type</th>
                <th><?= $room_type ?></th>
            </tr>
            <tr>
                <td>Luxury</td>
                <td><?= $room_type ?></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <th><?= $number ?></th>
            </tr>
            <tr>
                <td>85265307628</td>
                <td><?= $number ?></td>
            </tr>
            <tr>
                <th>service</th>
                <th><?= $services ?></th>
            </tr>
            <ul>
                <li>Room Service</li>
                <li>Breakfast</li>
            </ul>
            <tr>
                <th>Total Price</th>
                <th><?= $price ?></th>
            </tr>
            <tr>
                <td>$ 440</td>
                <td><?= $price ?></td>
            </tr>
</fieldset>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>