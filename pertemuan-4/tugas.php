<?php 
//  Viery Nugroho
//  21104410049
//  TI 4B


// TODO Identitas
const NAMA = "Viery Nugroho";
const NIM = 21104410049;

echo "Nama: " . NAMA . "<br>";
echo "NIM : " . NIM . "<hr>";

// TODO Tugas
$x = 9;
$bilangan = 10000;
$hasil = 10000;

$tugas = "MENAMPILKAN BILANGAN PERKALIAN DENGAN {$x} <br> PADA BILANGAN {$bilangan}";

echo "<h1>{$tugas}</h1>";

do{
    if($hasil > 0){ 
        echo "Hasil Pembagian Dengan {$x} = {$hasil} <br>";
        $bilangan = $bilangan / $x;
        $hasil = $bilangan;
    } else {
        return 0;
    }

    $hasil = $bilangan;
    
} while($hasil > 0);

?>
