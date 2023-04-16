<?php
//TODO : Tugas 1 Web

$name = "Viery Nugroho";
const NIM = 21104410049;
$class = "TI-4B";

$task1 = "Tampilan Web PHP";
$task2 = "Variabel";
$task3 = "Operator Aritmatika";
$task4 = "Operator Logika";

//* Variabel
$number = "Nomor";
$angka1 = 20;
$angka2 = 2.0;
$angka3 = 1;

//* Operator Aritmatika
$tambah = $angka1 + $angka2 + $angka3;
$kurang = $angka1 - $angka2 - $angka3;
$kali = $angka1 * $angka2 * $angka3;
$bagi = $angka1 / $angka2 / $angka3;
$modulo = $angka1 % $angka2;

//* Operator Logika
$nilaiA = 90;
$nilaiB = 85;
$kkm = 80;
$lunas = false;
$hoki = true;

$avg = ($nilaiA + $nilaiB) / 2;

$lulus = $avg >= $kkm;
// $wisuda = $lulus && $lunas;


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 - 21104410049</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container mx-auto border rounded p-4 mt-2 shadow">
        <header class="mt-2 bg-primary p-3 rounded shadow-lg">
            <div class=" row">
                <div class="col col-md-4 col-sm-12 mt-2">
                    <div class="biodata bg-primary rounded border p-2">
                        <div class="title-box">
                            <h2>Biodata</h2>
                        </div>
                        <div class="text-box bg-white p-2 rounded">
                            <h3><?= $name ?></h3>
                            <h3><?= NIM ?></h3>
                            <h3><?= $class ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-8 mt-2">
                    <div class="task bg-primary rounded border p-2">
                        <div class="title-box">
                            <h2>Tugas 1</h2>
                        </div>
                        <div class="text-box bg-white p-2 rounded">
                            <h3><?= $task1 ?></h3>
                            <h3><?= $task2 ?></h3>
                            <h3><?= $task3 ?></h3>
                            <h3><?= $task4 ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="mt-2 text-center rounded p-2 border shadow-lg">
            <div class="row">
                <div class="col col-12 col-md-4 mt-2 shadow">
                    <div class="variable bg-danger border rounded p-2">
                        <div class="title text-white">
                            <h2><?= $task2 ?></h2>
                        </div>
                        <div class="text bg-white rounded pt-2 pb-2">
                            <div class="sub-title bg-danger p-1 rounded ms-2 me-2">
                                <h3><?= $number ?></h3>
                            </div>
                            <h3><?= $angka1 ?></h3>
                            <h3><?= $angka2 ?></h3>
                            <h3><?= $angka3 ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-4 mt-2 shadow">
                    <div class="aritmatika  bg-info border rounded p-2">
                        <div class="title">
                            <h2><?= $task3 ?></h2>
                        </div>
                        <div class="text bg-white rounded pt-2 pb-2">
                            <h3><?= " {$angka1} + {$angka2} + {$angka3} = {$tambah}" ?></h3>
                            <h3><?= " {$angka1} - {$angka2} - {$angka3} = {$kurang}" ?></h3>
                            <h3><?= " {$angka1} * {$angka2} * {$angka3} = {$kali}" ?></h3>
                            <h3><?= " {$angka1} / {$angka2} / {$angka3} = {$bagi}" ?></h3>
                            <h3><?= " {$angka1} % {$angka2} = {$modulo}" ?></h3>
                            <!-- increment & decrement -->
                            <?php
                            $increment = ++$angka1;
                            $decrement = --$angka2;
                            ?>
                            <h3><?= " Increment 20 = {$increment}" ?></h3>
                            <h3><?= " Decrement 2 = {$decrement}" ?></h3>

                            <!-- normalisasikan $angka1 & $angka2 -->
                            <?php
                            $angka1 = --$angka1;
                            $angka2 = ++$angka2;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-4 mt-2 shadow">
                    <div class="logika  bg-success border rounded p-2">
                        <div class="title text-white">
                            <h2><?= $task4 ?></h2>
                        </div>
                        <div class="text bg-white rounded pt-2 pb-2">
                            <div class="data bg-success p-1 rounded ms-2 me-2">
                                <h3>Data</h3>
                            </div>
                            <div class="data-table bg-white rounded p-2">
                                <h5>NilaiA: <?= $nilaiA ?></h5>
                                <h5>NilaiB: <?= $nilaiB ?></h5>
                                <h5 class="text-danger">KKM: <?= $kkm ?></h5>
                                <hr />
                                <?php
                                if (!$lulus) {
                                    echo "<h5>Nilai Rata-Rata: {$avg} </h5> <br> <h3>TIDAK LULUS!</h3>";
                                } else if ($lulus) {
                                    echo "<h5>Nilai Rata-Rata: {$avg} </h5> <br> <h3>LULUS!</h3>";
                                }
                                ?>
                            </div>
                            <div class="pembayaran text-danger">
                                <?php
                                if (!$lunas) {
                                    echo "<h5>Status Pembayaran: BELUM LUNAS</h5>";
                                } else if ($lunas) {
                                    echo "<h5>Status Pembayaran: LUNAS</h5>";
                                }
                                ?>
                            </div>
                            <div class="data bg-success text-white p-1 rounded ms-2 me-2">
                                <?php
                                if ($wisuda = $lulus && $lunas) {
                                    echo "<h5>WISUDA</h5>";
                                } else if ($wisuda = $lulus && !$lunas) {
                                    echo "<h5>TIDAK WISUDA, BAYAR DULU</h5>";
                                } else if ($wisuda = !$lulus || !$lunas || $hoki) {
                                    echo "<h5>WISUDA JALUR HOKI</h5>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>