<?php
$tahun = $_POST['tahun'];

$jumlahPendudukMiskin = $_POST['jumlahPendudukMiskin'];
$jumlahPendudukMiskinMax = $_POST['jumlahPendudukMiskinMax'];
$jumlahPendudukMiskinMin = $_POST['jumlahPendudukMiskinMin'];

$jumlahRaskin = $_POST['jumlahRaskin'];
$jumlahRaskinMax = $_POST['jumlahRaskinMax'];
$jumlahRaskinMin = $_POST['jumlahRaskinMin'];

$jumlahDistribusi = $_POST['jumlahDistribusi'];
$jumlahDistribusiMax = $_POST['jumlahDistribusiMax'];
$jumlahDistribusiMin = $_POST['jumlahDistribusiMin'];

// Penduduk
function berkurang($jumlahPendudukMiskin, $jumlahPendudukMiskinMax, $jumlahPendudukMiskinMin)
{
    $nilaiBerkurang = 0;
    if ($jumlahPendudukMiskin <= $jumlahPendudukMiskinMin) {
        $nilaiBerkurang = 1;
    } else {
        if ($jumlahPendudukMiskinMin <= $jumlahPendudukMiskin && $jumlahPendudukMiskin <= $jumlahPendudukMiskinMax) {
            $hitungBerkurang = ($jumlahPendudukMiskinMax - $jumlahPendudukMiskin) / ($jumlahPendudukMiskinMax - $jumlahPendudukMiskinMin);
            $nilaiBerkurang = $hitungBerkurang;
        } else {
            $nilaiBerkurang = 0;
        }
    }
    return $nilaiBerkurang;
}

function bertambah($jumlahPendudukMiskin, $jumlahPendudukMiskinMax, $jumlahPendudukMiskinMin)
{
    $nilaiBertambah = 0;
    if ($jumlahPendudukMiskin <= $jumlahPendudukMiskinMin) {
        $nilaiBertambah = 1;
    } else {
        if ($jumlahPendudukMiskinMin <= $jumlahPendudukMiskin && $jumlahPendudukMiskin <= $jumlahPendudukMiskinMax) {
            $hitungBertambah = ($jumlahPendudukMiskin - $jumlahPendudukMiskinMin) / ($jumlahPendudukMiskinMax - $jumlahPendudukMiskinMin);
            $nilaiBertambah = $hitungBertambah;
        } else {
            $nilaiBertambah = 0;
        }
    }
    return $nilaiBertambah;
}

// Raskin
function sedikit($jumlahRaskin, $jumlahRaskinMax, $jumlahRaskinMin)
{
    $nilaiSedikit = 0;
    if ($jumlahRaskin <= $jumlahRaskinMin) {
        $nilaiSedikit = 1;
    } else {
        if ($jumlahRaskinMin <= $jumlahRaskin && $jumlahRaskin <= $jumlahRaskinMax) {
            $hitungSedikit = ($jumlahRaskinMax - $jumlahRaskin) / ($jumlahRaskinMax - $jumlahRaskinMin);
            $nilaiSedikit = $hitungSedikit;
        } else {
            $nilaiSedikit = 0;
        }
    }
    return $nilaiSedikit;
}

function banyak($jumlahRaskin, $jumlahRaskinMax, $jumlahRaskinMin)
{
    $nilaiBanyak = 0;
    if ($jumlahRaskin <= $jumlahRaskinMin) {
        $nilaiBanyak = 1;
    } else {
        if ($jumlahRaskinMin <= $jumlahRaskin && $jumlahRaskin <= $jumlahRaskinMax) {
            $hitungBanyak = ($jumlahRaskin - $jumlahRaskinMin) / ($jumlahRaskinMax - $jumlahRaskinMin);
            $nilaiBanyak = $hitungBanyak;
        } else {
            $nilaiBanyak = 0;
        }
    }

    return $nilaiBanyak;
}

// Distribusi
function turun($jumlahDistribusi, $jumlahDistribusiMax, $jumlahDistribusiMin)
{
    $nilaiTurun = 0;
    if ($jumlahDistribusi <= $jumlahDistribusiMin) {
        $nilaiTurun = 1;
    } else {
        if ($jumlahDistribusiMin <= $jumlahDistribusi && $jumlahDistribusi <= $jumlahDistribusiMax) {
            $hitungTurun = ($jumlahDistribusiMax - $jumlahDistribusi) / ($jumlahDistribusiMax - $jumlahDistribusiMin);
            $nilaiTurun = $hitungTurun;
        } else {
            $nilaiTurun = 0;
        }
    }
    return $nilaiTurun;
}

function naik($jumlahDistribusi, $jumlahDistribusiMax, $jumlahDistribusiMin)
{
    $nilaiNaik = 0;
    if ($jumlahDistribusi <= $jumlahDistribusiMin) {
        $nilaiNaik = 1;
    } else {
        if ($jumlahDistribusiMin <= $jumlahDistribusi && $jumlahDistribusi <= $jumlahDistribusiMax) {
            $hitungNaik = ($jumlahDistribusi - $jumlahDistribusiMin) / ($jumlahDistribusiMax - $jumlahDistribusiMin);
            $nilaiNaik = $hitungNaik;
        } else {
            $nilaiNaik = 0;
        }
    }
    return $nilaiNaik;
}

// Aturan 
function aturan1($nilaiBerkurang, $nilaiBanyak, $jumlahDistribusiMax, $jumlahDistribusiMin)
{

    $a1 = min($nilaiBerkurang, $nilaiBanyak);
    $z1 = $jumlahDistribusiMax - ($a1 * ($jumlahDistribusiMax - $jumlahDistribusiMin));

    return array($a1, $z1);
}


function aturan2($nilaiBerkurang, $nilaiSedikit, $jumlahDistribusiMax, $jumlahDistribusiMin)
{
    $a2 = min($nilaiBerkurang, $nilaiSedikit);
    $z2 = $jumlahDistribusiMax - ($a2 * ($jumlahDistribusiMax - $jumlahDistribusiMin));

    return array($a2, $z2);
}

function aturan3($nilaiBanyak,  $nilaiBertambah, $jumlahDistribusiMax, $jumlahDistribusiMin)
{
    $a3 = min($nilaiBertambah, $nilaiBanyak);
    $z3 = $jumlahDistribusiMin - ($a3 * ($jumlahDistribusiMax - $jumlahDistribusiMin));

    return array($a3, $z3);
}

function aturan4($nilaiBertambah, $nilaiSedikit, $jumlahDistribusiMax, $jumlahDistribusiMin)
{
    $a4 = min($nilaiBertambah, $nilaiSedikit);
    $z4 = $jumlahDistribusiMax - ($a4 * ($jumlahDistribusiMax - $jumlahDistribusiMin));

    return array($a4, $z4);
}

// Defuzzifikasi
function defuzzy($a1, $a2, $a3, $a4, $z1, $z2, $z3, $z4)
{
    $z = $a1 * $z1 + $a2 * $z2 + $a3 * $z3 + $a4 * $z4 / ($a1 + $a2 + $a3 + $a4);
    // $z = ($a1 + $a2 + $a3 + $a4) / $a1 * $z1 + $a2 * $z2 + $a3 * $z3 + $a4 * $z4;
    return $z;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/my-style.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Metode Tsukamoto</title>
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

    <div class="container">
        <?php if (isset($_POST['proses'])) { ?>
            <table class="table">
                <!-- Data inputan -->
                <h1>Inputan Data Variabel dan Himpunan Variabel Fuzzy</h1>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><?= $tahun ?></td>
                </tr>
                <tr>
                    <td>Jumlah Penduduk Miskin</td>
                    <td>:</td>
                    <td><?= $jumlahPendudukMiskin ?></td>
                </tr>
                <tr>
                    <td>Jumlah Penduduk Miskin Tertinggi</td>
                    <td>:</td>
                    <td><?= $jumlahPendudukMiskinMax ?></td>
                </tr>
                <tr>
                    <td>Jumlah Penduduk Miskin Terendah</td>
                    <td>:</td>
                    <td><?= $jumlahPendudukMiskinMin ?></td>
                </tr>
                <tr>
                    <td>Jumlah Raskin</td>
                    <td>:</td>
                    <td><?= $jumlahPendudukMiskin ?></td>
                </tr>
                <tr>
                    <td>Jumlah Raskin Tertinggi</td>
                    <td>:</td>
                    <td><?= $jumlahRaskinMax ?></td>
                </tr>
                <tr>
                    <td>Jumlah Raskin Terendah</td>
                    <td>:</td>
                    <td><?= $jumlahRaskinMin ?></td>
                </tr>
            </table>
            <table class="table">
                <h1>Fuzzyfikasi</h1>
                <!-- Perhitungan -->
                <tr>
                    <td>Jumlah Perhitungan Berkurang</td>
                    <td>:</td>
                    <td><?= berkurang($jumlahPendudukMiskin, $jumlahPendudukMiskinMax, $jumlahPendudukMiskinMin) ?></td>
                </tr>
                <tr>
                    <td>Jumlah Perhitungan Bertambah</td>
                    <td>:</td>
                    <td><?= bertambah($jumlahPendudukMiskin, $jumlahPendudukMiskinMax, $jumlahPendudukMiskinMin) ?></td>
                </tr>

                <tr>
                    <td>Jumlah Perhitungan Sedikit</td>
                    <td>:</td>
                    <td><?= sedikit($jumlahRaskin, $jumlahRaskinMax, $jumlahRaskinMin) ?></td>
                </tr>
                <tr>
                    <td>Jumlah Perhitungan Banyak</td>
                    <td>:</td>
                    <td><?= banyak($jumlahRaskin, $jumlahRaskinMax, $jumlahRaskinMin) ?></td>
                </tr>

                <tr>
                    <td>Jumlah Perhitungan Turun</td>
                    <td>:</td>
                    <td><?= turun($jumlahDistribusi, $jumlahDistribusiMax, $jumlahDistribusiMin) ?></td>
                </tr>
                <tr>
                    <td>Jumlah Perhitungan Naik</td>
                    <td>:</td>
                    <td><?= naik($jumlahDistribusi, $jumlahDistribusiMax, $jumlahDistribusiMin) ?></td>
                </tr>
            </table>
            <table class="table">
                <h1>Penentuan Aturan Fuzzy</h1>
                <!-- Aturan  -->
                <tr>
                    <td>Aturan R1 </td>
                    <td>:</td>
                    <?php
                    $a = 0;
                    $b = 0;
                    $berkurang = berkurang($jumlahPendudukMiskin, $jumlahPendudukMiskinMax, $jumlahPendudukMiskinMin);
                    $banyak = banyak($jumlahRaskin, $jumlahRaskinMax, $jumlahRaskinMin);
                    if ($berkurang && $banyak) {
                        $nilai_aturan1 = aturan1($berkurang, $banyak, $jumlahDistribusiMax, $jumlahDistribusiMin);
                        $a = $nilai_aturan1[0];
                        $b = $nilai_aturan1[1];
                    }
                    echo "<td>a-predikat1 = $a</td>";
                    
                    echo "<td>nilai z1 = $b</td>";
                    ?>
                </tr>
                <tr>
                    <td>Aturan R2 </td>
                    <td>:</td>
                    <?php
                    $a = 0;
                    $b = 0;
                    $berkurang = berkurang($jumlahPendudukMiskin, $jumlahPendudukMiskinMax, $jumlahPendudukMiskinMin);
                    $sedikit = sedikit($jumlahRaskin, $jumlahRaskinMax, $jumlahRaskinMin);
                    if ($berkurang && $sedikit) {
                        $nilai_aturan2 = aturan2($berkurang, $sedikit, $jumlahDistribusiMax, $jumlahDistribusiMin);
                        $a = $nilai_aturan2[0];
                        $b = $nilai_aturan2[1];
                    }
                    echo "<td>a-predikat2 = $a</td>";
                    
                    echo "<td>nilai z2 = $b</td>";
                    ?>
                </tr>
                <tr>
                    <td>Aturan R3 </td>
                    <td>:</td>
                    <?php
                    $a = 0;
                    $b = 0;
                    $banyak = banyak($jumlahRaskin, $jumlahRaskinMax, $jumlahRaskinMin);
                    $bertambah = bertambah($jumlahPendudukMiskin, $jumlahPendudukMiskinMax, $jumlahPendudukMiskinMin);
                    if ($banyak && $bertambah) {
                        $nilai_aturan3 = aturan3($banyak,  $bertambah, $jumlahDistribusiMax, $jumlahDistribusiMin);
                        $a = $nilai_aturan3[0];
                        $b = $nilai_aturan3[1];
                    }
                    echo "<td>a-predikat3 = $a</td>";
                    
                    echo "<td>nilai z3 = $b</td>";
                    ?>
                </tr>
                <tr>
                    <td>Aturan R4 </td>
                    <td>:</td>
                    <?php
                    $a = 0;
                    $b = 0;
                    $bertambah = bertambah($jumlahPendudukMiskin, $jumlahPendudukMiskinMax, $jumlahPendudukMiskinMin);
                    $sedikit = sedikit($jumlahRaskin, $jumlahRaskinMax, $jumlahRaskinMin);
                    if ($bertambah && $sedikit) {
                        $nilai_aturan4 = aturan4($bertambah, $sedikit, $jumlahDistribusiMax, $jumlahDistribusiMin);
                        $a = $nilai_aturan4[0];
                        $b = $nilai_aturan4[1];
                    }
                    echo "<td>a-predikat4 = $a</td>";
                    
                    echo "<td>nilai z4 = $b</td>";
                    ?>
                </tr>
            </table>
            <table class="table">
                <h1>Defuzzifikasi</h1>
                <tr>
                    <?php

                    $berkurang = berkurang($jumlahPendudukMiskin, $jumlahPendudukMiskinMax, $jumlahPendudukMiskinMin);
                    $banyak = banyak($jumlahRaskin, $jumlahRaskinMax, $jumlahRaskinMin);
                    $bertambah = bertambah($jumlahPendudukMiskin, $jumlahPendudukMiskinMax, $jumlahPendudukMiskinMin);
                    $sedikit = sedikit($jumlahRaskin, $jumlahRaskinMax, $jumlahRaskinMin);

                    $nilai_aturan1 = aturan1($berkurang, $banyak, $jumlahDistribusiMax, $jumlahDistribusiMin);
                    $nilai_aturan2 = aturan2($berkurang, $sedikit, $jumlahDistribusiMax, $jumlahDistribusiMin);
                    $nilai_aturan3 = aturan3($banyak,  $bertambah, $jumlahDistribusiMax, $jumlahDistribusiMin);
                    $nilai_aturan4 = aturan4($bertambah, $sedikit, $jumlahDistribusiMax, $jumlahDistribusiMin);

                    $a1 = $nilai_aturan1[0];
                    $a2 = $nilai_aturan2[0];
                    $a3 = $nilai_aturan3[0];
                    $a4 = $nilai_aturan4[0];
                    $z1 = $nilai_aturan1[1];
                    $z2 = $nilai_aturan2[1];
                    $z3 = $nilai_aturan3[1];
                    $z4 = $nilai_aturan4[1];
                    // var_dump($a1,$a2,$a3,$a4,$z1,$z2,$z3,$z4);
                    // die;    

                    $nilai_defuzzy = defuzzy($a1, $a2, $a3, $a4, $z1, $z2, $z3, $z4);

                    echo "<td>Hasil Deffuzyfikasi adalah $nilai_defuzzy ton</td>";
                    ?>
                </tr>
            </table>
        <?php } ?>
    </div>
    <footer>
        <center>Copyright &copy; Kelompok 2 - 2021</center>
    </footer>
</body>

</html>