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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">WAD Beauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php
                session_start();
                if(isset($_SESSION['loginTime'])){
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Selamat Datang, <?php echo $_SESSION['nama']?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
                <?php }else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>

                </li>
                <?php }
                ?>
            </ul>

        </div>
    </nav>
    
    <div class="container p-5">
        <form method="post" action="" class="p-5">
            <h3 class="text-center"> Login</h3>
            <hr>

            <div class="form-group">
                <label for="exampleInputPassword1">E-mail</label>
                <input name="email" type="email" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Kata Sandi</label>
                <input name="sandi" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <div class="text-center">
                <button name="login" type="submit" class="btn btn-primary">Login</button>
            </div>
            <p class="text-center">Belum punya Akun? <a href="register.php">Register</a>
            <p>
            
        </form>
    </div>
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
<?php
if(isset($_POST["login"])){
    $email =$_POST["email"];
    $sandi =$_POST["sandi"];

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "wad_modul4";
    $koneksi = mysqli_connect($host,$user,$password,$database) or die("No connection");


    $query = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' and password='$sandi'" );
   
    if ($query > 0){
        $row = $query->fetch_assoc();
        session_start();
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['nohp'] = $row['no_hp'];
        $_SESSION['loginTime'] = time();
        echo "<script>alert('Berhasil Login'); window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Gagal Login!');</script>";
    }
} 
?>