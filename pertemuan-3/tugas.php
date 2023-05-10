<?php 
// TODO Tugas Ke-2 {Switch Case}

// Inisialisasi Variabel
const NAME = "Viery Nugroho";
const NIM = 21104410049;
$alamat = "Dsn. Semanding, Ds. Banggle, Kec. Kanigoro, Kab. Blitar";

$hari = "Selasa";

// Tampilan Web
echo "<h1>Tugas ke-2 Web Programming</h1>";
echo "<br>";
echo "<b>Nama: </b>" . NAME;
echo "<br>";
echo "<b>NIM: </b>" . NIM;
echo "<br>";
echo "<b>Alamat : </b> {$alamat}";
echo "<br>";
echo "<br>";
// Switch Case
switch ($hari) {
    case "Senin":
        echo "Hari ini adalah {$hari} : Tanggal 8 Mei 2023";
        break;
    case "Selasa":
        echo "Hari ini adalah {$hari} : Tanggal 9 Mei 2023";
        break;
    case "Rabu":
        echo "Hari ini adalah {$hari} : Tanggal 10 Mei 2023";
        break;
    case "Kamis":
        echo "Hari ini adalah {$hari} : Tanggal 11 Mei 2023";
        break;
    
    default:
        echo "Pada Hari {$hari} Tidak Ada Jadwal Kuliah";
        break;
}

?>