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
$date = $_GET['date'];
$time = $_GET['time'];
$room_type = $_GET['room_type'];
$services = $_GET['services'];
$number = $_GET['number'];

?>
<div class="container-sm">
<h4 style="text-align: center;">Home Booking</h4>

    <fieldset>
    <form action="My Booking.php" method="post"> 
     <div class="form-group row">
         <label class="col-sm-2 col-form-label">Name</label>
         <div class="col-sm-10">
             <input type="text" class="form=control"
             name="name"> 
            </div>
            <div class="form-group row">
         <label class="col-sm-2 col-form-label">Check-in</label>
         <div class="col-sm-10">
             <input type="date" class="form=control" placeholder="dd/mm/yyyy"
             date="date" name="in"> 
            </div>
            <div class="form-group row">
         <label class="col-sm-2 col-form-label">Duration</label>
         <div class="col-sm-10">
             <input type="text" class="form=control"
             time="time" name="duration"> 
             <p>Day(s)</p>
            </div>
            <div class="form-group">
      <label for="roomtype">Room Type</label>
     <input type="text" name="room_type">
    </div>
    <legend>Add Service(s)</legend>
      <div class="form-check">
        <label class="form-check-label">
          <p>
            $ 20/service
          </p>
          <input class="form-check-input" type="checkbox" value="Room Sevice" data-np-checked="Room Service" name="services[]">
          Room service
          <br>
          <input class="form-check-input" type="checkbox" value="Breakfast" data-np-checked="Breakfast" name="services[]">
          Breakfast
        </label>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Phone Number</label>
         <div class="col-sm-10">
             <input type="text" class="form=control"
             name="number"> 
            </div>
          <div style="text-align: left;">
         <input type="submit" value="Book" class="btn btn-primary mb-2">
       
       </form>
     </div>

    </fieldset>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>