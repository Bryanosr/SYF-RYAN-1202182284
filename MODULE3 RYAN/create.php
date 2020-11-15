<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Create</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">EAD EVENTS</a>
        <form class="form-inline">
            <a href="home.php" class="btn btn-light">Home</a>
            <a href="create.php" class="btn btn-light">Buat Event</a>
        </form>
    </nav>
    <h3 class="text-center">Buat Event!</h3>


    <div class="card" style="width: 40rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body text-left">
            <form method="POST" action="submit.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Gambar</label>
                    <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategori" id="exampleRadios1" value="online"
                            checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Online
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategori" id="exampleRadios2"
                            value="offline">
                        <label class="form-check-label" for="exampleRadios2">
                            Offline
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jam Mulai</label>
                    <select name="mulai" class="form-control" id="exampleFormControlSelect1">
                        <option value="19.00">19.00</option>
                        <option value="20.00">20.00</option>
                        <option value="21.00">21.00</option>
                        <option value="22.00">22.00</option>
                        <option value="23.00">23.00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jam Berakhir</label>
                    <select name="berakhir" class="form-control" id="exampleFormControlSelect1">
                        <option value="19.00">19.00</option>
                        <option value="20.00">20.00</option>
                        <option value="21.00">21.00</option>
                        <option value="22.00">22.00</option>
                        <option value="23.00">23.00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat</label>
                    <input name="tempat" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input name="harga" type="number" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Benefit</label>
                    <div class="form-check">
                        <input name="benefit" class="form-check-input" type="checkbox" value="snacks"
                            id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Snacks
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="benefit" class="form-check-input" type="checkbox" value="sertifikat"
                            id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Sertifikat
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="benefit" class="form-check-input" type="checkbox" value="souvenir"
                            id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Souvenir
                        </label>
                    </div>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                <a href="#" class="btn btn-danger">Cancel</a>
            </form>
        </div>
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