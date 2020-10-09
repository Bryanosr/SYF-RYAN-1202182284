<!DOCTYPE html>
<html>
<body>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

    <title>Home</title>
<?php
$name = $_GET['name'];
$type = $_GET['type'];
$price = $_GET['price'];

?>
<div class="container-sm">
<h4 style="text-align: center;">Home Booking</h4>
    <h2 style="text-align: center; color:blue;">EAD HOTEL </h2>
    <h3 style="text-align: center; color:cyan;">Welcome To 5 Star Hotel </h3>
    <fieldset>
        <table class="table">
            <tr>
                <th>Standard</th>
                <th><?= $type ?></th>
            </tr>
          <tr>
                <td>$ 90/Day</td>
                <td><?= $price ?></td>
            </tr>
            <tr>
                <td>Facilities</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>1 Single Bed</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>1 Bathroom</td>
                <td><?= $name ?></td>
            </tr>
            <button type="button" class="btn btn-primary btn-lg btn-block">Book Now</button>
            <tr>
                <th>Superior</th>
                <th><?= $type ?></th>
            </tr>
            <tr>
                <td>$ 150/Day</td>
                <td><?= $price ?></td>
            </tr>
            <tr>
            <tr>Facilities</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>1 Double Bed</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>1 Television and Wi-Fi</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>1 Bathroom with hot water</td>
                <td><?= $name ?></td>
            </tr>
            <button type="button" class="btn btn-primary btn-lg btn-block">Book Now</button>
            <tr>
        
                <th>Luxury</th>
                <th><?= $type ?></th>
            </tr>
           
            <tr>
                <td>$ 200/Day</td>
                <td><?= $price ?></td>
            </tr>
            <tr>
            <td>Facilities</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>2 Double Bed</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>2 Bathroom with hot water</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>1 Kitchen</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>1 Television and Wi-Fi</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>1 Workroom</td>
                <td><?= $name ?></td>
            </tr>
            <button type="button" class="btn btn-primary btn-lg btn-block">Book Now</button>
            
            
        </table>
    </fieldset>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>