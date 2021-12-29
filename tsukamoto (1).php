<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/my-style.css">
    <title>Logika Fuzzy</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="tsukamoto.php">Metode Tsukamoto <span class="sr-only">(current)</span></a>
            </div>
        </div>
    </nav>
    <div class="container py-3 my-3" style="background-color:lightgray; border-radius:5px;">
        <h1 class="text-center">Sistem Perhitungan Logika Fuzzy Dengan Menggunakan Metode Tsukamoto</h1>
        <br>
        <form method="POST" action="proses_tsukamoto.php">
            <!-- Data Penduduk -->
            <div class="form-group">
                <label for="exampleFormControlInput1">Tahun</label>
                <input type="number" step="any" name="tahun" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Tahun">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Penduduk Miskin</label>
                <input type="number" step="any" name="jumlahPendudukMiskin" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Data Penduduk ">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Penduduk Miskin Tertinggi</label>
                <input type="number" step="any" name="jumlahPendudukMiskinMax" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Data Penduduk Tertinggi">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Penduduk Miskin Terendah</label>
                <input type="number" step="any" name="jumlahPendudukMiskinMin" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Data Penduduk Terendah">
            </div>

            <!-- Data Raskin -->
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Raskin</label>
                <input type="number" step="any" name="jumlahRaskin" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Data Raskin">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Raskin Tertinggi</label>
                <input type="number" step="any" name="jumlahRaskinMax" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Data Raskin Tertinggi">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Raskin Terendah</label>
                <input type="number" step="any" name="jumlahRaskinMin" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Data Raskin Terendah">
            </div>

            <!-- Data Distribusi -->
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Distribusi</label>
                <input type="number" step="any" name="jumlahDistribusi" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Data Distribusi">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Distribusi Tertinggi</label>
                <input type="number" step="any" name="jumlahDistribusiMax" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Data Distribusi Tertinggi">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Distribusi Terendah</label>
                <input type="number" step="any" name="jumlahDistribusiMin" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Data Distribusi Terendah">
            </div>

            <button type="submit" name="proses" class="btn btn-success py-1">Proses</button>
        </form>
    </div>
    <footer>
        <center>Copyright &copy; Kelompok 2 - 2021</center>
    </footer>
</body>
<script src="js/bootstrap.min.js"></script>
</html>