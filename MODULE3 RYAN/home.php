<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_module3";
$koneksi = mysqli_connect($host,$user,$password,$database) or die("No connection");
$query = mysqli_query($koneksi,"SELECT * FROM event_table");

 
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">EAD EVENTS</a>
        <form class="form-inline">
            <a href="home.php" class="btn btn-light">Home</a>
            <a href="create.php" class="btn btn-light">Buat Event</a>
        </form>
    </nav>
    <h3 class="text-center">WELCOME TO EAD EVENTS!</h3>

    <?php 
    if ($query->$num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
          echo '<div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">'.$row['name'].'</h5>
              <p class="card-text">'.$row['tanggal'].'</p>
              <p class="card-text">'.$row['tempat'].'</p>
              <p class="card-text">Kategori:'.$row['kategori'].'</p>
              <a href="event.php?id='.$row['id'].'" class="btn btn-primary">Detail</a>
          </div>
      </div>';
        }
      } else {
        echo "<p>No Events Found</p>";
      }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>